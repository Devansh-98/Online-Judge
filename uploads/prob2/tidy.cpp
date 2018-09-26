#include<iostream>
#include<vector>
using namespace std;

int main()
{
	int t;
	cin>>t;
	for(int k=1;k<=t;k++)
	{
		std::vector<int> v;
		long long n,l;
		cin>>n;

		while(n)
		{
			v.push_back(n%10);
			n/=10;
		}

		l=v.end()-v.begin();

		for (int i = 0; i < l-1; ++i)
		{
			if(v[i]<v[i+1])
			{
				for(int j=0;j<=i;j++)
					v[j]=9;
				v[i+1]--;
			}
		}
		
		for (int i = l-1;i>=0;i--)
		{
			if(i==l-1 && v[l-1]==0)
				continue;
			cout<<v[i];
		}
		cout<<endl;
	}
	return 0;
}