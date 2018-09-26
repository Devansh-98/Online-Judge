#define _GNU_SOURCE
#include <unistd.h> //wrapper for syscalls
#include <sys/syscall.h> // loc: /usr/src/include/i386-linux-gnu/bits/syscall.h, defines syscall numbers/Macros
#include <sys/types.h>
#include <sys/shm.h>
#include <sys/wait.h>
#include <stdio.h>
#include<stdlib.h>
int main(int argc, char *argv[]) {
 long long int child1Var=0,child2Var=0,parentVar=0,i;
 pid_t pid1=fork();
 int shmid;
 int *shm;
 int *n;
 if(pid1<0)
 {
 	printf("unable to create process");
 	exit;
 }
 if(pid1==0)//first child
 {
   printf("I am in currently in %d\n I will calculate child1Var\n",(int)getpid());
   //Next two lines Allocates space that can contain two long long int
   shmid = shmget(200, 2*sizeof(long long int), 0666 | IPC_CREAT);
   shm = shmat(shmid, 0, 0);
   n = shm;
   for(i=0;i<100;i+=2)
   {
     child1Var+=i;
   }
   *n=child1Var;
   shmdt(shm);
 }
 else if(pid1!=0)// parent
 {
   pid_t pid2=fork();
   if(pid2<0)
   {
  	printf("unable to create process");
 	exit;
   }
   if(pid2==0)// second child
   {
     printf("I am in currently in %d\nI will calculate child2Var\n",(int)getpid() );
     shmid = shmget(200, 2*sizeof(long long int), 0666 | IPC_CREAT);
     shm = shmat(shmid, 0, 0);
     n = shm;
     n++;
     for(i=1;i<100;i+=2)
     {
       child2Var+=i;
     }
     *n=child2Var;
     shmdt(shm);
   }
   else
   {
     wait(NULL);
     wait(NULL);
     printf("I am in currently in %d\nI will calculate parent\n",(int)getpid() );
     shmid = shmget(200, 2*sizeof(long long int), 0666 | IPC_CREAT);
     shm = shmat(shmid, 0, 0);
     n = shm;
     child1Var=*n;
     *n=0;
     n++;
     child2Var=*n;
     *n=0;
     parentVar=child1Var*child2Var;
     shmdt(shm);
     printf("ChildVar1=%lld ChildVr2=%lld ParentVar=%lld\n",child1Var,child2Var,parentVar);
   }
 }
 return 0;
}
