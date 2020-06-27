-- menampilkan seluruh data dari tabel provinsi
SELECT * FROM provinsi_tb;
-- menampilkan seluruh data provinsi beserta kabupaten
SELECT * FROM provinsi_tb JOIN kabupaten_tb
ON provinsi_tb.id = kabupaten_tb.provinsi_id;
-- menampilkan seluruh data tabel provinsi dari pulau tertentu
SELECT * FROM provinsi_tb WHERE pulau = 'papua';