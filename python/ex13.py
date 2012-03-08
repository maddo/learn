from sys import argv

#script, first, second, third = argv

#print "The script is called:", script
#print "Your first variable is:", first
#print "Your second variable is:", second
#print "Your third variable is:", third

script, one, two = argv

raw = raw_input("Gimme a var: ")
print "We added %r and %r by loading them into the %r at the command line.  Later you added %r." % (
    one, two, script, raw)
