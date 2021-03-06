CREATE OR REPLACE FUNCTION shiplist_proc()
RETURNS trigger AS
$$
BEGIN
IF (TG_OP = 'INSERT') THEN
	UPDATE SHIPPED_PRODUK SET stok=stok-NEW.kuantitas WHERE kode_produk = NEW.kode_produk;
ELSIF (TG_OP='DELETE') THEN
	UPDATE SHIPPED_PRODUK SET stok=stok+OLD.stok WHERE kode_produk = OLD.kode_produk;
ELSIF (TG_OP='UPDATE') THEN
	UPDATE SHIPPED_PRODUK SET stok=stok+(NEW.kuantitas-OLD.stok) WHERE kode_produk=NEW.kode_produk;
END IF;
RETURN NEW;
END;
$$
LANGUAGE plpgsql;

CREATE TRIGGER shiplist_trigger
AFTER INSERT OR DELETE OR UPDATE
ON LIST_ITEM FOR EACH ROW
EXECUTE PROCEDURE shiplist_proc();

CREATE OR REPLACE FUNCTION poin_proc()
RETURNS trigger AS
$$
BEGIN
IF (TG_OP = 'UPDATE') THEN
	IF(NEW.status='4') THEN
		UPDATE PELANGGAN SET poin=poin+(0.01*NEW.total_bayar) WHERE email = NEW.email_pembeli;
	END IF;
END IF;
RETURN NEW;
END;
$$
LANGUAGE plpgsql;

CREATE TRIGGER poin_trigger
AFTER UPDATE
ON TRANSAKSI_SHIPPED FOR EACH ROW
EXECUTE PROCEDURE poin_proc();