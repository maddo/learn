# Store line one of joke in 'x'
x = "There are %d types of people." % 10
# Store string of word 'binary' in var binary
binary = "binary"
# Store string of contraction of do not in var do_not
do_not = "don't"
# Store string with the two above values formated in y
y = "Those who know %s and those who %s." % (binary, do_not)

# Print above two long strings
print x
print y

# Repeat the above strings (as if telling a joke)
print "I said: %r." % x
print "I also said: '%s'." % y

# Store boolean value evaluating the joke
hilarious = False
# Format evaluation string
joke_evaluation = "Isn't that joke so funny?! %r"

# Print joke evaluation string with format with boolean value inerted
print joke_evaluation % hilarious

# Declare two variables with two sides of single sentence
w = "This is the left side of..."
e = "a string with a right side."

# Print entire sentence concatenated
print w + e
