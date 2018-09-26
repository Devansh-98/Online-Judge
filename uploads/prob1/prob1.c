#include<stdio.h>
int main()
{
	int t;
	scanf("%d",&t);
	while(t--)
	{
		long long int n,i;
		long long int temp,sum=0;
		scanf("%lld",&n);
		for(i=0;i<n;i++)
		{
			scanf("%lld",&temp);
			sum+=temp;
		}
		if(sum%n==0)
		printf("%lld\n",sum/n);
		else
		printf("-1\n");
	}
	return 0;
}



