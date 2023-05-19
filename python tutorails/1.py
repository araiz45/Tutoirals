# name = "world"
# print ("hello " + name)
# num1 = 12

# print(type(num1))
# num2 = 7


# print(num1 + num2)
# print(num1 - num2)
# print(num1 * num2)
# print(num1 / num2)
# print(num1 ** num2)
# print(num1 ** 2)
# print(num1 ** 3)
# print(num1 ** (1/2))
# print(num1 // num2)
# print(num1 % num2)



# Module 2 part 3
# variables
# types of valid variables 

# me = 34
# Me = 34
# th45 = 34
# _value = 45
# This_me = 35

# print(_value)


# me = "44"
# my_friend = 23
# my_Friends = my_friend + int(me)
# print(my_Friends)

# salutation = "Dr"
# first_name = "Mirza"
# middle_name = "Aaraiz"
# last_name = "Baig"
# suffix = "PHD"
# print(salutation, first_name, middle_name, last_name ,", ", suffix)

# def greeting(name, department):
#     print("Good Mouring ", name)
#     print("you are in the ", department)


# greeting("injir","security")
# greeting("marwan", "feed/news")


# def area_of_triangle (base , height):
#     return base *height/2

# area_a = area_of_triangle(23, 23)
# area_b = area_of_triangle(12, 45)
# area_sum = area_a + area_b 
# print("This is the sum of two triangle " + str(area_sum))


# def converts_seconds(seconds):
#     hours = seconds // 3600
#     minutes = (seconds - hours * 3600) // 60
#     remaining_seconds = seconds - hours * 3600 - minutes *60
#     return hours, minutes , remaining_seconds


# hours , minutes, seconds = converts_seconds(5000)
# print(hours, minutes , seconds)



# def greeting(name):
#     print("hello " + name)


# rehan = greeting("rehan")
# print(rehan)


# def lucky_number(name):
#     lucky_num = len(name) * 9
#     print(name + " your lucky number is " + str(lucky_num))

# rehan = lucky_number("rehan")
# araiz = lucky_number("araiz")
# aaraiz = lucky_number("aaraiz")
# zain = lucky_number("zain")
# nabeera = lucky_number("nabeera")


# print(1>10)
# print(1!=10)
# print("cat" < "dog")
# print("dog" == "dog")

# # print(1 < "1")


# print(1>0 and 4>2)
# print(1>2 and 4>5)
# print(len("dog"))
# print(len("cat"))



# print(25<20 or 1!=2)
 

# print(not 4 == "Answer")


# def hind_username(username):
#     if len(username) < 3:
#         print("This is not valid username")


# name = hind_username("rn")



# def even(number):
#     if number % 2 == 0:
#         return print("This is an even number")

   
#     print("This is an odd number")


# even(3)

# number = 34
# if number % 2 == 0:
#     print("hello")

# print("world")

# def check_username(name): 
#     if(type(name) != str):
#         return print("username is not a string")

#     elif(len(name) < 3 or len(name)>15):
#         return print("Invalid Length")

#     else:
#         return print("valid username")


# check_username("rehan")
# check_username("rd")
# check_username("adlffffffffffffffffffffffff")
# check_username(656565)

# print("ME" < "me")


# num = 223


# if(num < 5):
#     print("number is less than 5")

# elif(num < 25 and num > 12):
#     print("number is under 5 and 12")

# elif(num % 2 == 0):
#     print("number is an even number")

# else:
#     print("The number is " + str(num))

# print("Congrulations")


# def difference(x, y):
#     z = x - y
#     return z


# print(difference(5, 3))

x = 5*2

# print((10 != x) or (10 > x))

x = 0

# while x < 5:
#     print("The value of x in the loop is " + str(x))
#     x = x+1

# print("The value of loop out of the loop is " + str(x)) 

# def attempts (num):
#     x = 1
#     while x <= num:
#         print("Attempt number # " + str(x))
#         x = x + 1

#     print("Done")



# attempts(4)
 

# def valid_username (name):
#     if(name < 3 and name > 12):
#         return False

#     elif (name != str):
#         return False 
    
#     else:
#         return True



# rehan = 
    


# x = 1
# sum = 0

# while x < 10:
#     print(sum ,x)
#     sum +=x 
#     x+=1

# # x = 1
# product = 1

# while x < 10:
#     print(product, x)
#     product = product * x
#     x +=1


x = 100

# while x % 2 == 0 and x !=0:
#     print(x)
#     x = x/2


# def table(result):
#     multiplayer = 1

#     while multiplayer <= 10:
#         res = result * multiplayer
#         print( str(result) + " x "+ str(multiplayer) + " = " + str(res))
#         multiplayer += 1



# # table(12)

# for x in range(10):
#     print(x)



# friend = ['Azish', 'Munir', 'Rashid', 'Tilu']
# for friends in friend:
#     print("Hello Friend " + friends)




# values = [34, 23, 12, 34, 45]

# sum = 0
# length = 0 

# for value in values:
#     sum += value
#     length += 1


# print("The sum of values is " + str(sum) + " and length is "+str(length))


# product = 1
# for x in range(1, 10):
#     product = product * x

# print(product)




# for a in range(300, 100):
#     print(a)

# print(print)


# def to_celsius(x):
#     return (x-32)*5/9

# for x in range(0, 101, 10):
#     print(x, to_celsius(x))



# for x in range (10+1):
#     print(x)


# for x in range(10, 0, -2):
#     print(x)



# for x in range(2, -2, -1):
#     print(x)




# for left in range(7):
#     for right in range (left, 7):
#         print("[" + str(left) + "|" + str(right) + "]", end=" ")
#     print()


# teams = ["Wolves", "Lions", "Jaguars", "Tigers", "Leopards"]

# for home_team in teams :
#     for away_team in teams:
#         if home_team != away_team:
#             print(home_team + " vs " + away_team)


# for x in [23, 23, 12, 34, 56, 23]:
#     print(x)


# def greet_friends(friends):
#     for friend in friends:
#         print("hey " + friend)


# # greet_friends(["Yasir", "Mena", "Muna", "Makara", "opening"])
# # greet_friends("Rehan")
# greet_friends(["Rehan"])

# for n in range(6,18+1,3):
#     print(n*2)

# for n in range(19):
#     if n % 2 == 0:
#         print(n)


# for n in range(10):
#     print(n+n)

# for n in range(0,18+1,2):
#     print(n*2)

# for n in range(18+1):
#     print(n**2)

# def factorial(n):
#     print("Factorial called with " + str(n))
#     if n<2:
#         print("Returning 1")
#         return 1

#     result =  n*factorial(n-1)
#     print("Returing " + str(result) + " for factorial of " + str(n))
#     return result 


# x = factorial(1000)
# print(x)


# def is_power_of(number, base):
#   # Base case: when number is smaller than base.
#   if number < base:
#     # If number is equal to 1, it's a power (base**0).
#     return (base**0)

#   # Recursive case: keep dividing number by base.
#   return is_power_of()

# x = is_power_of(8,2)
# print(x) # Should be True
# y = (is_power_of(64,4)) # Should be True
# print(y)
# z = is_power_of(70,10) # Should be False
# print(z)


# def count_users(group):
#   count = 0
#   for member in get_members(group):
#     count += 1
#     if is_group(member):
#       count += count_users(member)
#   return count

# print(count_users("sales")) # Should be 3
# print(count_users("engineering")) # Should be 8
# print(count_users("everyone")) # Should be 18


# def is_power_of(number, base):
#   # Base case: when number is smaller than base.
#   if base != 0:
#     if number < 1:
#         # If number is equal to 1, it's a power (base**0).
#         return True

#   # Recursive case: keep dividing number by base.
#   return is_power_of(number/base, base)

# print(is_power_of(8,2)) # Should be True
# print(is_power_of(64,4)) # Should be True
# print(is_power_of(70,10)) # Should be False


# def is_power_of(number, base):
#   # Base case: when number is smaller than base.
#   print("In the 3 line " + str(number) + " " + str(base))
#   if number == 1:
#     # If number is equal to 1, it's a power (base**0).
#     print("In the 6 line " + str(number) + " " + str(base))
#     return True
#   elif number < 1:
#     return False
#   else:
#     return is_power_of(number/base, base)
#   # Recursive case: keep dividing number by base.
#   print("In the 10 line " + str(number) + " " + str(base))
  
  
#   # print("In the 6 line " + str(number) + " " + str(base))


# print(is_power_of(8,2)) # Should be True
# print(is_power_of(64,4)) # Should be True
# print(is_power_of(70,10)) # Should be False



# def count_users(group):
#   count = 0
#   get_members = ['s', 'a']
#   is_group =
#   for member in get_members(group):
#     count += 1

#     if is_group(member):
#       count += count_users(member)
#   return count

# print(count_users("sales")) # Should be 3
# print(count_users("engineering")) # Should be 8
# print(count_users("everyone")) # Should be 18



# x =["sales", "me", "everyone"]

# for m in x:
#     # print(m)
#     for y in m:
#         print(y)


# # This function will accept an integer variable "end" and count by 10
# # from 0 to the "end" value.
# def count_by_10(end):
#     # Initializeq the "count" variable as a string.
#     count = ""

#     # The range function parameters instruct Python to start the count  
#     # at 0 and stop at the variable given as the upper end of the range. 
#     # Since the value of the high end of a range is excluded by default,  
#     # you can make Python include the "end" value by adding +1 to it. 
#     # The third parameter tells Python to increment the count by 10.
#     for number in range(0,end+1,10):

#         # Although the variable "count" will hold a count of integers,  
#         # this example will be converted to a string using "str(number)" 
#         # in order to display the incremental count from 0 to the "end" 
#         # value on the same line with a space " " separating each 
#         # number.  
#         count += str(number) + " "
        
#     # The .strip() method will trim the final space " " from the end of 
#     # the string "count"  
#     return count.strip()


# # Call the function with 1 integer parameter.
# print(count_by_10(100))
# # Should print 0 10 20 30 40 50 60 70 80 90 100


# # 10. The value of index 10 will be 10-1, or 9.  
# for outer_loop in range(10):

#     # Using the "outer_loop" variable as the end of range for the  
#     # inner loop, means the end of range index will be 9. The value 
#     # of index 9 will be 9-1, or 8.
#     # print(outer_loop)
#     for inner_loop in range(outer_loop):

#         # The printed result is the value of "inner_loop". Since  
#         # there aren’t any calculations in this loop, there is a 
#         # simple shortcut for solving what the final value printed 
#         # by the "inner_loop" will be. The solution is to simply use 
#         # the value of the "inner_loop" index, which is 8.
# #         print(inner_loop)
        
# for i in range(10, 0, -1):
#     print(i)


# This function accepts a CEO's salary as a variable. 
# It counts the number of digits in the salary and 
# returns the sentence like:
# "The CEO has a 6-figure salary."
# def X_figure(salary):
    
#     # Initializes the counter as an integer.
#     tally = 0

#     # The if-statement checks if the variable "salary" 
#     # is equal to 0.
#     if salary == 0:
#         # If true, then it increments the counter to 
#         # show there is 1 digit in 0.
#         print("I am in if ....")
#         tally += 1

#     # The while loop starts to run while the "salary"
#     # is greater than or equal to 1 (the loop will 
# #     # not run if the "salary" is 0).
# #     while salary >= 1:
# #         print("now iam in while..")
# #         # The body of the while loop counts the digits 
# #         # in "salary" by counting the number of times 
# #         # "salary" can be divided by 10 until "salary" 
# #         # is no longer >= 1.
# #         print("now I am above the salary.." + str(salary))
# #         salary = salary/10
# #         print("now I am below the salary.." + str(salary))

# #         # Add 1 to the counter to tally the number of 
# #         # times the loop runs.
# #         tally += 1
# #         print("now i am below telly increment" + str(tally))

# #     # Return the results of the "tally" of the number
# #     # of digits in "salary".
# #     print("now value is returning ..")
# #     return tally
 
# # # Call the X_figure function with 1 parameter, converted to a string,
# # # inside a print function with additional strings.
# # print("The CEO has a " + str(X_figure(300000)) + "-figure salary.")





# # This function will accept two integer variables: the floor
# # number that a passenger "enter"s an elevator and the floor
# # number the passenger is going to "exit". Then, the function
# # counts up or down from the two floor numbers.
# def elevator_floor(enter, exit):
#     # The "floor" variable will be used as a counter and to  
#     # print the floor numbers. The "elevator_direction"
#     # variable will hold the string "Going up: " or 
#     # "Going down: " plus the count up or down of the 
#     # "floor" numbers.
#     floor = enter # 1
#     elevator_direction = ""

#     # If the passenger enters the elevator on a floor that  
#     # is higher than the destination floor:
#     #1 #4
#     if enter > exit:
        
#         # Then the "elevator_direction" string will be 
#         # initialized with the string "Going down: ".
#         elevator_direction = "Going down: "

#         # While the "floor" number is greater than or  
#         # equal to the exit floor number:
#         while floor >= exit:
#             # The "floor" number is converted to a string 
#             # and is appended to the string variable 
#             # "elevator_direction".
#             elevator_direction += str(floor)

#             # If the "floor" number is still greater than  
#             # the exit floor number:
#             if floor > exit:

#                 # A pipe | character is added between each  
#                 # floor number in the string variable  
#                 # "elevator_direction" to provide a visual  
#                 # divider between numbers. The if-statement 
#                 # above (if floor > exit) prevents the pipe 
#                 # character from appearing after the "floor" 
#                 # number is no longer greater than the "exit" 
#                 # variable. 
#                 elevator_direction += " | "
                
#                 # Decrement the "floor" number as the elevator 
#                 # goes down.
#             floor -= 1

#     # Else, it is implied that the passenger is entering the  
#     # elevator on a floor that is lower than the destination 
#     # floor.
#     else:

#         # The "elevator_direction" string will be initialized 
#         # with the string "Going up: ".
#         elevator_direction = "Going up: "
        
#         # While the "floor" number is less than or equal to the 
#         # "exit" floor number:
#         #1 4
#         while floor <= exit:

#             # Convert the the "floor" number to a string and append 
#             # it to the string variable "elevator_direction".
#             elevator_direction += str(floor)

#             # If the entry floor number is still less than the exit 
#             # floor number:
#             if floor < exit:

#                 # The pipe | character is added between each  
#                 # floor number in the string variable  
#                 # "elevator_direction" to provide a visual  
#                 # divider between numbers. The if-statement 
#                 # above (if floor < exit) prevents the pipe 
#                 # character from appearing after the "floor" 
#                 # number is no longer less than the "exit" 
#                 # variable. 
#                 elevator_direction += " | "

#             # Increments the "floor" number as the elevator goes up.
#             floor += 1

#     # Returns the string holding the elevator direction (Going down or 
#     # Going up) along with the floor countdown or count up.
#     return elevator_direction


# # Call the function with 2 integer parameters. 
# print(elevator_floor(1,4)) # Should print Going up: 1 | 2 | 3 | 4
# print(elevator_floor(6,2)) # Should print Going down: 6 | 5 | 4 | 3 | 2


# def decade_counter():
#     while year < 50:
#         year += 10
#     return year



# # decade_counter()

# for x in range(1, 10, 3):
#     print(x)

# for x in range(10):
#     for y in range(x):
#         print(y)


# def count_numbers(first, last):
#   # Loop through the numbers from first to last 
#   x = first
#   while x <= last:
#     print(x)
#     x += 1

# count_numbers(2,6)

# hello = "araiz \n" * 1000000
# print(hello)


# hello = "world"

# print(hello[2])


# print("hello world")

# def me(name)=>{

# }


name = 'araiz'
rehan = 'rehan'
# # print(rehan[4])
# print(rehan[-1])
# print(len(name))

# # print(rehan[2, 3])

# fruits = "pinapple"
# print(fruits[:3])
# print(fruits[3:])


# message = "Hello ! L am  a good boy"
# new_message = message[: 8] + "I" + message[10:]
# print(new_message)


pets = "Cats & Dogs"
# print(pets.index("&"))

# more_pets = pets[:5] + "n" + pets[6:]
# print(more_pets)

# print("dragon" in pets)
# print("Cats" in pets)
# print("cat" in pets)


# def replace_email(email, old_domin, new_domin):
#     if "@" + old_domin in email:
#         index = email.index("@" + old_domin)
#         new_email = email[:index] + "@" + new_domin
#         return new_email
#     return email




# rehan = replace_email("rehan@me.com" , "me.com" , "problemsmasher.com")
# print(rehan)


# answer = "YES"


# print(answer.upper())
# print(answer.lower())

# if answer.lower() == "yes":
#     print("user says yes")

# else:
#     print("your says no")


# query = "                My name is araiz                    "
# print(query.strip())
# print(query.lstrip())
# print(query.rstrip())


# counting = "The wheel on the bus goes round and round all days long".count("e")
# print(counting)

# endswith = "My name is terrible".endswith("terrible")
# endswith2 = "My name is terrible".endswith("merrible")
# print(endswith, endswith2)


# number = "rehan".isnumeric()
# number1 = "rehan334".isnumeric()
# number2 = "2323".isnumeric()


# print(number, number1, number2)

# me = " ".join(["Hello How are you ","me how are you ", " Hope you are going well"])
# print(me)

# me = " ".join(["This", "joint", 'by', 'method'])
# print(me)

# me = "this is good one".split()

# print(me)


# name = "araiz"
# # number = len(name)*3
# # print("Hello {}, your lucky number is {}".format(name, number))


# print("hello {name}, your lucky number is {number}".format(name=name, number= len(name)*3))


# price = 34.23
# With_tax = price * 1.08
# print("Base price is : ${:.2f} With tax price is ${:.2f}".format(price, With_tax))


# def to_celcius (x):
#     return (x-32)*5/9

# for x in range(0, 101, 10):
#     print(" {:>3}F | {:>6.2f}C".format(x, to_celcius(x)))




# name = "araiz"
# # _me = "343434"
# mean = "araiz 33434"
# # print(name.isalpha(), _me.isalpha(), mean.isalpha())
# # mean.replace("33434", "is good boy")
# print(mean.replace("33434", "is good boy"))

# print("hello world this is me")



# name = "Aaraiz"
# roll = len(name)*3

# print("{roll} is the roll number of ,{name}".format(name=name, roll = roll))


# print("{roll} is the roll number of ,{name}".format(name= "Rehan", roll= len(name)*9))


# name = "Aaraiz"
# roll = len(name)*9
# print("Roll number of {} is {}".format(name, roll))


# price = 12.23
# tax_cost = price *1.23
# # print("Base price is Rs {:.2f} With tax is {:.2f}".format(price, tax_cost))
# # print("Base price is Rs {:2f} With tax is {:2f}".format(price, tax_cost))



# me = "araiz"
# # print(me[0])

# Weather = "Rainfall"
# print(Weather[:4])


# def replace_ending(sentence, old, new):
#     # Check if the old substring is at the end of the sentence 
#     if sentence.find(old) and sentence.find(old):
#         # Using i as the slicing index, combine the part
#         # of the sentence up to the matched string at the 
#         # end with the new string
#         i = ___
#         new_sentence = ___
#         return new_sentence


#     # Return the original sentence if there is no match 
#     return sentence
    
# print(replace_ending("It's raining cats and cats", "cats", "dogs")) 
# # Should display "It's raining cats and dogs"
# print(replace_ending("She sells seashells by the seashore", "seashells", "donuts")) 
# # Should display "She sells seashells by the seashore"
# print(replace_ending("The weather is nice in May", "may", "april")) 
# # Should display "The weather is nice in May"
# print(replace_ending("The weather is nice in May", "May", "April")) 
# # Should display "The weather is nice in April"


# # strings = "This is me Hello Hello"
# me = strings.find("Hello")
# print(strings.find(""))

 
# array = "I have car and motorbike"
# for string in array:
#     if 'car' in string and 'motorbike' in string:
#         print("Car and motorbike are in string")
#     else:
#         print("nothing")
#         break


# def is_palindrome(input_string):
#     # Two variables are initialized as string date types using empty 
#     # quotes: "reverse_string" to hold the "input_string" in reverse
#     # order and "new_string" to hold the "input_string" minus the 
#     # spaces between words, if any are found.
#     new_string = ""
#     reverse_string = ""
#     letter = input_string.strip()

#     # Complete the for loop to iterate through each letter of the
#     # "input_string"
#     for x in input_string:

#         # The if-statement checks if the "letter" is not a space.
#         if letter != " ":

#             # If True, add the "letter" to the end of "new_string" and
#             # to the front of "reverse_string". If False (if a space
#             # is detected), no action is needed. Exit the if-block.
#             new_string = input_string.lower()[0]
#             reverse_string = input_string.lower()[-1]
#             # print(new_string)
#             # print(reverse_string)

#     # Complete the if-statement to compare the "new_string" to the
#     # "reverse_string". Remember that Python is case-sensitive when
#     # creating the string comparison code. 
#     if new_string == reverse_string:
#         print(new_string, reverse_string)

#         # If True, the "input_string" contains a palindrome.
#         print("in outter if")
#         return True
		
#     # Otherwise, return False.
#     print("above false")
#     return False


# print(is_palindrome("Never Odd or Even")) # Should be True
# print(is_palindrome("abc")) # Should be False
# print(is_palindrome("kayak")) # Should be True




# me = "hello pakistan hello"
# our = "pakistan"
# print(me[me.find(our):])

# for x in me:

#     if(me[me.find(our):]):
#         # print("im in")
#         if(x == ' '):
#             break
#         else:
#             print(x)
#             continue


# def replace_ending(sentence, old, new):
#     # Check if the old substring is at the end of the sentence 
#     if old in sentence:
#         # Using i as the slicing index, combine the part
#         # of the sentence up to the matched string at the 
#         # end with the new string
#         i = sentence.replace(old, new)
#         new_sentence = i
#         return new_sentence


#     # Return the original sentence if there is no match 
#     return sentence
    
# print(replace_ending("It's raining cats and cats", "cats", "dogs")) 
# # Should display "It's raining cats and dogs"
# print(replace_ending("She sells seashells by the seashore", "seashells", "donuts")) 
# # Should display "She sells seashells by the seashore"
# print(replace_ending("The weather is nice in May", "may", "april")) 
# # Should display "The weather is nice in May"
# print(replace_ending("The weather is nice in May", "May", "April")) 
# # Should display "The weather is nice in April"


# #  Function which returns last word
# def replace_ending(sentence, old , new):
   
#     # taking empty string
#     newstring = ""
     
#     # calculating length of string
#     length = len(sentence)
     
#     # traversing from last
#     for i in range(length-1, 0, -1):
       
#         # if space is occurred then return
#         if(sentence[i] == " "):
           
#             # return reverse of newstring
#             y = newstring[::-1]
#             x = y.replace(old, new)

#             return sentence[:i] +" "+ x
#         else:
#             newstring = newstring + sentence[i]
 
 
# # Driver code
# # string = "Learn algorithms at geeksforgeeks"
# # print(lastWord(string, "geeksforgeeks", "araiz"))

# print(replace_ending("It's raining cats and cats", "cats", "dogs")) 
# # Should display "It's raining cats and dogs"
# print(replace_ending("She sells seashells by the seashore", "seashells", "donuts")) 
# # Should display "She sells seashells by the seashore"
# print(replace_ending("The weather is nice in May", "may", "april")) 
# # Should display "The weather is nice in May"
# print(replace_ending("The weather is nice in May", "May", "April")) 
# # Should display "The weather is nice in April"





# x = ["Hello ", "World " , "This " , "is ", "araiz "]
# print(x, type(x), len(x))

# print("World " in x)
# x[0] = "me"
# print(x[0])
# print(x)


# for y in x:
#     print(str(y))


# print(x[1:3])


def get_word(sentence, n):
	# Only proceed if n is positive 
	if n > 0:
		words = list(sentence)
		# Only proceed if n is not more than the number of words 
		if n <= len(words):
			return()
	return("")

print(get_word("This is a lesson about lists", 4)) # Should print: lesson
print(get_word("This is a lesson about lists", -4)) # Nothing
print(get_word("Now we are cooking!", 1)) # Should print: Now
print(get_word("Now we are cooking!", 5)) # Nothing


# x = "This is me the good one"
# print(x[5])