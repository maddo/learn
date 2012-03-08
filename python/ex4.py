# qty of cars
cars = 100
# passenger capacity in each car
space_in_a_car = 4.0
# qty of drivers in group
drivers = 30
# qty of passengers in group
passengers = 90
# qty of cars which will not be used
cars_not_driven = cars - drivers
# qty of cars in use
cars_driven = drivers
# total number of spaces available for carpooling
carpool_capacity = cars_driven * space_in_a_car
# goal of people per car based on current numbers
average_passengers_per_car = passengers / cars_driven


print "There are", cars, "cars available."
print "There are only", drivers, "drivers available."
print "There will be", cars_not_driven, "empty cars today."
print "We can transport", carpool_capacity, "people today."
print "We have", passengers, "to carpool today."
print "We need to put about", average_passengers_per_car, "in each car."
