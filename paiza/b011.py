import sys

def main():
    pocket_count, index = map(int, sys.stdin.readline().split())
    q = pocket_count * 2

    page = (index - 1) // q
    print(((2 * page + 1) * q + 1) - index)

if __name__ == '__main__':
    main()