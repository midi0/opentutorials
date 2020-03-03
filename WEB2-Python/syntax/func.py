a=1
b=2
c=3
s=a+b+c
r=s/3
print(r)

'''
def average():
    a=1
    b=2
    c=3
    s=a+b+c
    r=s/3
    print(r)
'''
'''
#parameter
def average(a,b,c):
    s=a+b+c
    r=s/3
    print(r)
#argument 10 20 30을 parameter a b c 가 받음
average(10,20,30)
'''

def average(a,b,c):
    s=a+b+c
    r=s/3
    return r
average(10,20,30)
