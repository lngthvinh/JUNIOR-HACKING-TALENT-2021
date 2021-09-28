import random

'''
Use this https://www.epochconverter.com/ and remember your epoch time
Advice: 
    t1 = <your epoch time> - 5
    t2 = <your epoch time> + 5
'''
t1 = 1632825865 * 256
t2 = 1632825875 * 256
user_id = 9175407

while True:
    random.seed(t1)
    print(t1)
    if random.randint(1000000, 9999999) == user_id:
        print(t1)
        break
    if t1 > t2:
        break
    t1 += 1

