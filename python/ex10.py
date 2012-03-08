tabby_cat = "\tI'm tabbed in."
persion_cat = "I'm split\non a line."
backslash_cat = "I'm \\ a \\ cat."

fat_cat = '''
I'll do a list
\t* Cat food
\t* Fishies
\t* Catnip\n\t* Grass
'''

print tabby_cat
print persion_cat
print backslash_cat
print fat_cat

formatter = "%s\n\t* %s\n\t* %s\n\t* %s\n\t* %s"

str1 = "I'll do a list"
str2 = 'Cat food'
str3 = 'Fishies'
str4 = 'Catnip'
str5 = 'Grass'

print formatter % ( str1, str2, str3, str4, str5 )
