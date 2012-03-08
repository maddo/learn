# load the argv feature from module sys
from sys import argv

# get the script name and input filename from the command line
script, filename = argv

# open file from command line input - make it ready for use
txt = open(filename)

# print out the filename and file contents
print "here's your file %r:" % filename
print txt.tell()
txt.seek(10)
print txt.tell()
print txt.read()
print txt.tell()
print txt.isatty()
txt.close()
# ask the user for the file name again
print "I'll also ask you to type it again:"
file_again = raw_input("> ")

# open the new file
txt_again = open(file_again)

# print the contents of the latest filename
print txt_again.read()
txt_again.close()
