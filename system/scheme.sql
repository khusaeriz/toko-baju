
-- create table produk

create table produk(
	id_produk int(5) not null auto_increment,
	nama_produk varchar(50),
	kategori int(5),
	harga int(10),
	detail text,
	gambar varchar(100),
	primary key(id_produk)
);

-- create table kategori

create table kategori_master(
	id_kategori int(5) not null auto_increment,
	nama_kategori varchar(30),
	primary key(id_kategori)
);

-- create table pesanan

create table pesanan(
	id_pesanan int(5) not null auto_increment,
	id_produk int(5),
	nama_pemesan varchar(50),
	email_pemesan varchar(50),
	jumlah int(3),
	ukuran char(2),
	status int(1), -- 1 = sedang diproses, 2 = sedang dikirim, 3 = belum diproses, 4 = dibatalkan
	primary key(id_pesanan)
);

-- create table pesan

create table pesan(
	id_pesan int(5) not null auto_increment,
	perihal int(1), -- 1 = konfirmasi pembayaran, 2 = komplain, 3 = lain-lain
	nama_pengirim varchar(50),
	email_pengirim varchar(50),
	isi text,
	primary key(id_pesan)
);
