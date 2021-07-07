# what does this code do? what do you expect as output?

def a(b):
 c,d='',''
 for i in range(len(b)+1,1,-1):
  c+=b[i-2]
  d=c
 return d
print(a('Hamster'))