def calcular_fibonacci(n):
    a, b = 0, 1
    serie = []

    for _ in range(n):
        serie.append(a)
        a, b = b, a + b

    return serie