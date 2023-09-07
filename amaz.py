def count_frequency(weights):
    count = {}
    for weight in weights:
        if weight in count:
            count[weight] += 1
        else:
            count[weight] = 1
    return count
def sort_weights(count):
    return sorted(count.keys(), key=lambda x: count[x], reverse=True)


def minimum_trips(weights):
    count = count_frequency(weights)
    sorted_weights = sort_weights(count)
    trips = 0
    for weight in sorted_weights:
        while count[weight] > 0:
            if count[weight] >= 3:
                trips += 1
                count[weight] -= 3
            elif count[weight] >= 2:
                trips += 1
                count[weight] -= 2
            else:
                return -1
    return trips

print(minimum_trips([2,2,5,6,4,7,6,7,5,4,4,4]))