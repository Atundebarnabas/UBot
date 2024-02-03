import time
height = input("Height: ")
for i in range(int(height)):
      # time.sleep(0.04)
      j = 0;
      while j < (i+1):
            print("#", end= " ",) 
            time.sleep(0.5)
            j += 1
      print("\n")