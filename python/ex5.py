name = 'Zed A. Shaw'
age = 35 # not a lie
height = 74 # inches
weight = 180 # lbs
eyes = 'Blue'
teeth = 'White'
hair = 'Brown'

print "Let's talk about %s." % name
print "He's %d inches tall." % height
print "He's %d pounds heavy." % weight
print "Actually that's not too heavy."
print "He's got %s eyes and %s hair." % (eyes, hair)
print "His teeth are usually %s depending on the coffee." % teeth

# this line is tricky, try to get it exactly right
print "If I add %d, %d, and %d I get %d." % (
    age, height, weight, age + height + weight)

print "Extra Credit"    
    
my_int = 777
my_str = 'Stringggy'
print "What is %%r? int: %r, string: %r" % ( my_int, my_str )

my_float = 3.22
print "A float is: %r." % my_float

# Convert inches to centimeters

metric_height = 2.56 * height
print "%d inches is equal to %g centimeters." % (height, metric_height)

# Convert pounds to kilos

metric_weight = 0.45359237 * weight
print "%d pounds is equal to %g kilograms." % (weight, metric_weight)
