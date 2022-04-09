SELECT
	kode_barang, stok_akhir 
FROM
	stok_barang 
WHERE
	kode_stok IN ( SELECT max( id ) FROM stok_barang GROUP BY kode_barang )