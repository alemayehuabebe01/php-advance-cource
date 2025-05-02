# this is a python script that will be calles from a php script
def hello():
    name = input("Enter your name:")
    print("Hello " + name + " this is a python function that is running in the php script")
    
hello()