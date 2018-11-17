string = ""
bar = 1

x = int(8)
print ("\n")
# Looping Baris
while bar <= x:
	kol = bar
	# Looping Kolom Spasi Kosong
	while kol > 1:
		string = string + "   "
		kol = kol - 1
	# Looping Kolom Bintang Sisi Kiri	
	kiri = 0
	while kiri <= (x - bar):
		string = string + " * "
		kiri = kiri + 1
	# Looping Kolom Bintang Sisi Kanan
	kanan = kiri	
	while kanan > 1:
		string = string + " * "
		kanan = kanan - 1
        
	string = string + "\n\n"
	bar = bar + 1
print (string)
