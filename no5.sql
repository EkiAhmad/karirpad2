SELECT
	barang.kdbrg, nama, sum(jual.jumlah) AS total
FROM 
	barang
LEFT JOIN 
	jual on jual.kdbrg = barang.kdbrg
GROUP BY 
	barang.kdbrg