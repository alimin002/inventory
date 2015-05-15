--
-- PostgreSQL database dump
--

-- Dumped from database version 9.3.5
-- Dumped by pg_dump version 9.3.5
-- Started on 2015-05-15 10:57:37

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 225 (class 3079 OID 11750)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2283 (class 0 OID 0)
-- Dependencies: 225
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 214 (class 1259 OID 96332)
-- Name: barang; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE barang (
    kode_barang character varying NOT NULL,
    kode_produk character varying,
    nama_barang character varying,
    satuan character varying,
    harga_jual bigint,
    stock smallint,
    harga_beli bigint
);


ALTER TABLE public.barang OWNER TO postgres;

--
-- TOC entry 170 (class 1259 OID 87602)
-- Name: bukubesar; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bukubesar (
    periode character varying,
    notransaksi character varying,
    tgltransaksi date,
    noperkiraan character varying,
    keterangan character varying,
    dk character varying,
    debet bigint,
    kredit bigint,
    id integer NOT NULL
);


ALTER TABLE public.bukubesar OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 87608)
-- Name: bukubesar_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bukubesar_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bukubesar_id_seq OWNER TO postgres;

--
-- TOC entry 2284 (class 0 OID 0)
-- Dependencies: 171
-- Name: bukubesar_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bukubesar_id_seq OWNED BY bukubesar.id;


--
-- TOC entry 172 (class 1259 OID 87610)
-- Name: bukubesarajp; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bukubesarajp (
    periode character varying,
    notransaksi character varying,
    tgltransaksi date,
    noperkiraan character varying,
    keterangan character varying,
    dk character varying,
    debet bigint,
    kredit bigint,
    status character varying,
    id integer NOT NULL
);


ALTER TABLE public.bukubesarajp OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 87616)
-- Name: bukubesarajp_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bukubesarajp_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bukubesarajp_id_seq OWNER TO postgres;

--
-- TOC entry 2285 (class 0 OID 0)
-- Dependencies: 173
-- Name: bukubesarajp_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bukubesarajp_id_seq OWNED BY bukubesarajp.id;


--
-- TOC entry 174 (class 1259 OID 87618)
-- Name: djurnal; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE djurnal (
    notransaksi character varying,
    noperkiraan character varying,
    dk character varying,
    debet bigint,
    kredit bigint,
    id integer NOT NULL
);


ALTER TABLE public.djurnal OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 87624)
-- Name: djurnal_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE djurnal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.djurnal_id_seq OWNER TO postgres;

--
-- TOC entry 2286 (class 0 OID 0)
-- Dependencies: 175
-- Name: djurnal_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE djurnal_id_seq OWNED BY djurnal.id;


--
-- TOC entry 176 (class 1259 OID 87626)
-- Name: djurnalajp; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE djurnalajp (
    notransaksi character varying,
    noperkiraan character varying,
    dk character varying,
    debet bigint,
    kredit bigint,
    id integer NOT NULL
);


ALTER TABLE public.djurnalajp OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 87632)
-- Name: djurnalajp_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE djurnalajp_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.djurnalajp_id_seq OWNER TO postgres;

--
-- TOC entry 2287 (class 0 OID 0)
-- Dependencies: 177
-- Name: djurnalajp_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE djurnalajp_id_seq OWNED BY djurnalajp.id;


--
-- TOC entry 221 (class 1259 OID 96388)
-- Name: group; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "group" (
    kode_group character varying NOT NULL,
    nama_group character varying
);


ALTER TABLE public."group" OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 87634)
-- Name: hjurnal; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE hjurnal (
    notransaksi character varying,
    periode character varying,
    tgltransaksi date,
    keterangan character varying,
    status character varying,
    id integer NOT NULL
);


ALTER TABLE public.hjurnal OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 87640)
-- Name: hjurnal_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE hjurnal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hjurnal_id_seq OWNER TO postgres;

--
-- TOC entry 2288 (class 0 OID 0)
-- Dependencies: 179
-- Name: hjurnal_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE hjurnal_id_seq OWNED BY hjurnal.id;


--
-- TOC entry 180 (class 1259 OID 87642)
-- Name: hjurnalajp; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE hjurnalajp (
    notranaksi character varying,
    periode character varying,
    keterangan character varying,
    status character varying,
    tgltransaksi date,
    id integer NOT NULL
);


ALTER TABLE public.hjurnalajp OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 87648)
-- Name: hjurnalajp_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE hjurnalajp_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hjurnalajp_id_seq OWNER TO postgres;

--
-- TOC entry 2289 (class 0 OID 0)
-- Dependencies: 181
-- Name: hjurnalajp_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE hjurnalajp_id_seq OWNED BY hjurnalajp.id;


--
-- TOC entry 213 (class 1259 OID 87836)
-- Name: login; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE login (
    id integer NOT NULL,
    username character varying,
    password character varying
);


ALTER TABLE public.login OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 87834)
-- Name: login_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE login_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.login_id_seq OWNER TO postgres;

--
-- TOC entry 2290 (class 0 OID 0)
-- Dependencies: 212
-- Name: login_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE login_id_seq OWNED BY login.id;


--
-- TOC entry 182 (class 1259 OID 87650)
-- Name: neracalajur; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE neracalajur (
    periode character varying,
    noperkiraan character varying,
    debetns integer,
    kreditns integer,
    debetajp bigint,
    kreditajp bigint,
    debetnsd bigint,
    kreditnsd bigint,
    debitrl bigint,
    kreditnrl bigint,
    debetneraca bigint,
    kreditneraca bigint,
    id integer NOT NULL
);


ALTER TABLE public.neracalajur OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 87656)
-- Name: neracalajur_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE neracalajur_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.neracalajur_id_seq OWNER TO postgres;

--
-- TOC entry 2291 (class 0 OID 0)
-- Dependencies: 183
-- Name: neracalajur_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE neracalajur_id_seq OWNED BY neracalajur.id;


--
-- TOC entry 184 (class 1259 OID 87658)
-- Name: neracasaldo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE neracasaldo (
    periode character varying,
    noperkiraan character varying,
    totaldebet bigint,
    totalkredit bigint,
    saldodebet bigint,
    saldokredit bigint,
    id integer NOT NULL
);


ALTER TABLE public.neracasaldo OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 87664)
-- Name: neracasaldo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE neracasaldo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.neracasaldo_id_seq OWNER TO postgres;

--
-- TOC entry 2292 (class 0 OID 0)
-- Dependencies: 185
-- Name: neracasaldo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE neracasaldo_id_seq OWNED BY neracasaldo.id;


--
-- TOC entry 218 (class 1259 OID 96364)
-- Name: pelanggan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pelanggan (
    kode_pelanggan character varying NOT NULL,
    nama_pelanggan character varying,
    alamat character varying,
    no_telepon character varying,
    jenis_pelanggan character varying
);


ALTER TABLE public.pelanggan OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 96340)
-- Name: pemasok; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pemasok (
    kode_pemasok character varying NOT NULL,
    nama_pemasok character varying,
    alamat character varying,
    kota character varying,
    provinsi character varying,
    no_telepon character varying,
    no_fax character varying,
    kontak_person character varying
);


ALTER TABLE public.pemasok OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 96348)
-- Name: pembelian; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pembelian (
    no_masuk character varying NOT NULL,
    tanggal_masuk date,
    kode_pemasok character varying,
    cara_bayar character varying,
    tanggal_bayar date,
    status_bayar character varying,
    total_bayar bigint,
    user_id integer
);


ALTER TABLE public.pembelian OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 96412)
-- Name: pembelian_detail; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pembelian_detail (
    no_masuk character varying NOT NULL,
    kode_barang character varying,
    harga_beli bigint,
    jumlah integer,
    diskon real,
    subtotal bigint
);


ALTER TABLE public.pembelian_detail OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 96356)
-- Name: penjualan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE penjualan (
    no_nota character varying NOT NULL,
    tanggal_nota date,
    total_bayar bigint,
    kode_pelanggan character varying,
    user_id integer
);


ALTER TABLE public.penjualan OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 96404)
-- Name: penjualan_detail; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE penjualan_detail (
    no_nota character varying NOT NULL,
    kode_barang character varying,
    harga_jual bigint,
    jumlah integer,
    diskon real,
    subtotal bigint
);


ALTER TABLE public.penjualan_detail OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 96380)
-- Name: produk; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE produk (
    kode_produk character varying NOT NULL,
    kode_group character varying,
    nama_group character varying,
    nama_produk character varying
);


ALTER TABLE public.produk OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 96372)
-- Name: retur_pembelian; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE retur_pembelian (
    no_retur character varying NOT NULL,
    tanggal_retur date,
    kode_pelanggan character varying,
    kode_barang character varying,
    jumlah integer,
    harga_jual bigint,
    bentuk_retur character varying,
    kondisi_barang character varying,
    user_id integer
);


ALTER TABLE public.retur_pembelian OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 96396)
-- Name: retur_penjualan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE retur_penjualan (
    no_retur character varying NOT NULL,
    tanggal_retur date,
    kode_pelanggan character varying,
    kode_barang character varying,
    jumlah integer,
    harga_jual bigint,
    bentuk_retur character varying,
    kondisi_barang character varying,
    user_id integer
);


ALTER TABLE public.retur_penjualan OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 87666)
-- Name: tblajp; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblajp (
    periode character varying,
    noperkiraan character varying,
    totaldebet bigint,
    totalkredit bigint,
    msaldodebet bigint,
    msaldokredit bigint,
    id integer NOT NULL
);


ALTER TABLE public.tblajp OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 87672)
-- Name: tblajp_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblajp_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblajp_id_seq OWNER TO postgres;

--
-- TOC entry 2293 (class 0 OID 0)
-- Dependencies: 187
-- Name: tblajp_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblajp_id_seq OWNED BY tblajp.id;


--
-- TOC entry 188 (class 1259 OID 87674)
-- Name: tblaktifa; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblaktifa (
    noperkiraan character varying,
    noperkiraan2 character varying,
    kodekelompok character varying,
    tglperolehan date,
    hargaperolehan bigint,
    umurekonomis bigint,
    tglpensiun date,
    nilairesidu bigint,
    penyusutan date,
    noseri character varying,
    tglterhitung date,
    akumulasi bigint,
    beban bigint,
    nilaibuku bigint,
    bebanperbulan bigint,
    id integer NOT NULL
);


ALTER TABLE public.tblaktifa OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 87680)
-- Name: tblaktifa_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblaktifa_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblaktifa_id_seq OWNER TO postgres;

--
-- TOC entry 2294 (class 0 OID 0)
-- Dependencies: 189
-- Name: tblaktifa_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblaktifa_id_seq OWNED BY tblaktifa.id;


--
-- TOC entry 190 (class 1259 OID 87682)
-- Name: tblcatatan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblcatatan (
    periode character varying,
    catatan character varying,
    id integer NOT NULL
);


ALTER TABLE public.tblcatatan OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 87688)
-- Name: tblcatatan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblcatatan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblcatatan_id_seq OWNER TO postgres;

--
-- TOC entry 2295 (class 0 OID 0)
-- Dependencies: 191
-- Name: tblcatatan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblcatatan_id_seq OWNED BY tblcatatan.id;


--
-- TOC entry 192 (class 1259 OID 87690)
-- Name: tblmasternamausaha; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblmasternamausaha (
    namausaha character varying,
    alamat character varying,
    kodepos character varying,
    notelepon character varying,
    email character varying,
    namapimpinan character varying,
    id integer NOT NULL
);


ALTER TABLE public.tblmasternamausaha OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 87696)
-- Name: tblmasternamausaha_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblmasternamausaha_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblmasternamausaha_id_seq OWNER TO postgres;

--
-- TOC entry 2296 (class 0 OID 0)
-- Dependencies: 193
-- Name: tblmasternamausaha_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblmasternamausaha_id_seq OWNED BY tblmasternamausaha.id;


--
-- TOC entry 194 (class 1259 OID 87698)
-- Name: tblmasterpengguna; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblmasterpengguna (
    kodeuser character varying,
    namauser character varying,
    katakunci character varying,
    id integer NOT NULL
);


ALTER TABLE public.tblmasterpengguna OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 87704)
-- Name: tblmasterpengguna_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblmasterpengguna_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblmasterpengguna_id_seq OWNER TO postgres;

--
-- TOC entry 2297 (class 0 OID 0)
-- Dependencies: 195
-- Name: tblmasterpengguna_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblmasterpengguna_id_seq OWNED BY tblmasterpengguna.id;


--
-- TOC entry 196 (class 1259 OID 87706)
-- Name: tblmasterperiode; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblmasterperiode (
    periode character varying,
    sampaitgl date,
    daritgl date,
    keterangan character varying,
    id integer NOT NULL
);


ALTER TABLE public.tblmasterperiode OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 87712)
-- Name: tblmasterperiode_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblmasterperiode_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblmasterperiode_id_seq OWNER TO postgres;

--
-- TOC entry 2298 (class 0 OID 0)
-- Dependencies: 197
-- Name: tblmasterperiode_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblmasterperiode_id_seq OWNED BY tblmasterperiode.id;


--
-- TOC entry 198 (class 1259 OID 87714)
-- Name: tblmasterperkiraan; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblmasterperkiraan (
    noperkiraan character varying,
    namaperkiraan character varying,
    kelompok character varying,
    keterangan character varying,
    id integer NOT NULL
);


ALTER TABLE public.tblmasterperkiraan OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 87720)
-- Name: tblmasterperkiraan_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblmasterperkiraan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblmasterperkiraan_id_seq OWNER TO postgres;

--
-- TOC entry 2299 (class 0 OID 0)
-- Dependencies: 199
-- Name: tblmasterperkiraan_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblmasterperkiraan_id_seq OWNED BY tblmasterperkiraan.id;


--
-- TOC entry 200 (class 1259 OID 87722)
-- Name: tblneraca; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblneraca (
    periode character varying,
    judul1 character varying,
    judul2 character varying,
    judul3 character varying,
    noperkiraan character varying,
    nominal bigint,
    nilai bigint,
    id integer NOT NULL
);


ALTER TABLE public.tblneraca OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 87728)
-- Name: tblneraca_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblneraca_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblneraca_id_seq OWNER TO postgres;

--
-- TOC entry 2300 (class 0 OID 0)
-- Dependencies: 201
-- Name: tblneraca_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblneraca_id_seq OWNED BY tblneraca.id;


--
-- TOC entry 202 (class 1259 OID 87730)
-- Name: tblpajak; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblpajak (
    noseripajak character varying,
    npwp character varying,
    nopkp character varying,
    tglpkp date,
    kodecabang character varying,
    jenisusaha character varying,
    kluspt character varying,
    id integer NOT NULL
);


ALTER TABLE public.tblpajak OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 87736)
-- Name: tblpajak_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblpajak_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblpajak_id_seq OWNER TO postgres;

--
-- TOC entry 2301 (class 0 OID 0)
-- Dependencies: 203
-- Name: tblpajak_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblpajak_id_seq OWNED BY tblpajak.id;


--
-- TOC entry 204 (class 1259 OID 87738)
-- Name: tblperubahanmodal; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblperubahanmodal (
    periode character varying,
    modal bigint,
    lababersih bigint,
    prive bigint,
    id integer NOT NULL
);


ALTER TABLE public.tblperubahanmodal OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 87744)
-- Name: tblperubahanmodal_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblperubahanmodal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblperubahanmodal_id_seq OWNER TO postgres;

--
-- TOC entry 2302 (class 0 OID 0)
-- Dependencies: 205
-- Name: tblperubahanmodal_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblperubahanmodal_id_seq OWNED BY tblperubahanmodal.id;


--
-- TOC entry 206 (class 1259 OID 87746)
-- Name: tblrugilaba; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblrugilaba (
    periode character varying,
    noperkiraan character varying,
    keterangan character varying,
    debet bigint,
    kredit bigint,
    id integer NOT NULL
);


ALTER TABLE public.tblrugilaba OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 87752)
-- Name: tblrugilaba_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblrugilaba_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblrugilaba_id_seq OWNER TO postgres;

--
-- TOC entry 2303 (class 0 OID 0)
-- Dependencies: 207
-- Name: tblrugilaba_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblrugilaba_id_seq OWNED BY tblrugilaba.id;


--
-- TOC entry 208 (class 1259 OID 87754)
-- Name: tblstatussetupsaldoawal; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tblstatussetupsaldoawal (
    id integer NOT NULL,
    statussetup character varying
);


ALTER TABLE public.tblstatussetupsaldoawal OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 87760)
-- Name: tblstatussetupsaldoawal_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tblstatussetupsaldoawal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblstatussetupsaldoawal_id_seq OWNER TO postgres;

--
-- TOC entry 2304 (class 0 OID 0)
-- Dependencies: 209
-- Name: tblstatussetupsaldoawal_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tblstatussetupsaldoawal_id_seq OWNED BY tblstatussetupsaldoawal.id;


--
-- TOC entry 210 (class 1259 OID 87762)
-- Name: tmpsaldoblnlalu; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tmpsaldoblnlalu (
    periode character varying,
    tgltransaksi date,
    noperkiraan character varying,
    dk character varying,
    debet bigint,
    kredit bigint,
    status character varying,
    keterangan character varying,
    id integer NOT NULL
);


ALTER TABLE public.tmpsaldoblnlalu OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 87768)
-- Name: tmpsaldoblnlalu_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tmpsaldoblnlalu_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tmpsaldoblnlalu_id_seq OWNER TO postgres;

--
-- TOC entry 2305 (class 0 OID 0)
-- Dependencies: 211
-- Name: tmpsaldoblnlalu_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tmpsaldoblnlalu_id_seq OWNED BY tmpsaldoblnlalu.id;


--
-- TOC entry 2026 (class 2604 OID 87770)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bukubesar ALTER COLUMN id SET DEFAULT nextval('bukubesar_id_seq'::regclass);


--
-- TOC entry 2027 (class 2604 OID 87771)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bukubesarajp ALTER COLUMN id SET DEFAULT nextval('bukubesarajp_id_seq'::regclass);


--
-- TOC entry 2028 (class 2604 OID 87772)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY djurnal ALTER COLUMN id SET DEFAULT nextval('djurnal_id_seq'::regclass);


--
-- TOC entry 2029 (class 2604 OID 87773)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY djurnalajp ALTER COLUMN id SET DEFAULT nextval('djurnalajp_id_seq'::regclass);


--
-- TOC entry 2030 (class 2604 OID 87774)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY hjurnal ALTER COLUMN id SET DEFAULT nextval('hjurnal_id_seq'::regclass);


--
-- TOC entry 2031 (class 2604 OID 87775)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY hjurnalajp ALTER COLUMN id SET DEFAULT nextval('hjurnalajp_id_seq'::regclass);


--
-- TOC entry 2047 (class 2604 OID 87839)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY login ALTER COLUMN id SET DEFAULT nextval('login_id_seq'::regclass);


--
-- TOC entry 2032 (class 2604 OID 87776)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY neracalajur ALTER COLUMN id SET DEFAULT nextval('neracalajur_id_seq'::regclass);


--
-- TOC entry 2033 (class 2604 OID 87777)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY neracasaldo ALTER COLUMN id SET DEFAULT nextval('neracasaldo_id_seq'::regclass);


--
-- TOC entry 2034 (class 2604 OID 87778)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblajp ALTER COLUMN id SET DEFAULT nextval('tblajp_id_seq'::regclass);


--
-- TOC entry 2035 (class 2604 OID 87779)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblaktifa ALTER COLUMN id SET DEFAULT nextval('tblaktifa_id_seq'::regclass);


--
-- TOC entry 2036 (class 2604 OID 87780)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblcatatan ALTER COLUMN id SET DEFAULT nextval('tblcatatan_id_seq'::regclass);


--
-- TOC entry 2037 (class 2604 OID 87781)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblmasternamausaha ALTER COLUMN id SET DEFAULT nextval('tblmasternamausaha_id_seq'::regclass);


--
-- TOC entry 2038 (class 2604 OID 87782)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblmasterpengguna ALTER COLUMN id SET DEFAULT nextval('tblmasterpengguna_id_seq'::regclass);


--
-- TOC entry 2039 (class 2604 OID 87783)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblmasterperiode ALTER COLUMN id SET DEFAULT nextval('tblmasterperiode_id_seq'::regclass);


--
-- TOC entry 2040 (class 2604 OID 87784)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblmasterperkiraan ALTER COLUMN id SET DEFAULT nextval('tblmasterperkiraan_id_seq'::regclass);


--
-- TOC entry 2041 (class 2604 OID 87785)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblneraca ALTER COLUMN id SET DEFAULT nextval('tblneraca_id_seq'::regclass);


--
-- TOC entry 2042 (class 2604 OID 87786)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblpajak ALTER COLUMN id SET DEFAULT nextval('tblpajak_id_seq'::regclass);


--
-- TOC entry 2043 (class 2604 OID 87787)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblperubahanmodal ALTER COLUMN id SET DEFAULT nextval('tblperubahanmodal_id_seq'::regclass);


--
-- TOC entry 2044 (class 2604 OID 87788)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblrugilaba ALTER COLUMN id SET DEFAULT nextval('tblrugilaba_id_seq'::regclass);


--
-- TOC entry 2045 (class 2604 OID 87789)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tblstatussetupsaldoawal ALTER COLUMN id SET DEFAULT nextval('tblstatussetupsaldoawal_id_seq'::regclass);


--
-- TOC entry 2046 (class 2604 OID 87790)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tmpsaldoblnlalu ALTER COLUMN id SET DEFAULT nextval('tmpsaldoblnlalu_id_seq'::regclass);


--
-- TOC entry 2265 (class 0 OID 96332)
-- Dependencies: 214
-- Data for Name: barang; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO barang (kode_barang, kode_produk, nama_barang, satuan, harga_jual, stock, harga_beli) VALUES ('b1001', 'p1001', 'kemeja lengan panjang', 'potong', 120000, 7, 90000);
INSERT INTO barang (kode_barang, kode_produk, nama_barang, satuan, harga_jual, stock, harga_beli) VALUES ('b1002', 'p1002', 'kemeja lengan panjang', 'potong', 90000, 4, 700000);
INSERT INTO barang (kode_barang, kode_produk, nama_barang, satuan, harga_jual, stock, harga_beli) VALUES ('b1003', 'p1003', 'jacket lea', 'potong', 190000, 6, 130000);


--
-- TOC entry 2221 (class 0 OID 87602)
-- Dependencies: 170
-- Data for Name: bukubesar; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2306 (class 0 OID 0)
-- Dependencies: 171
-- Name: bukubesar_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bukubesar_id_seq', 1, false);


--
-- TOC entry 2223 (class 0 OID 87610)
-- Dependencies: 172
-- Data for Name: bukubesarajp; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2307 (class 0 OID 0)
-- Dependencies: 173
-- Name: bukubesarajp_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bukubesarajp_id_seq', 1, false);


--
-- TOC entry 2225 (class 0 OID 87618)
-- Dependencies: 174
-- Data for Name: djurnal; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2308 (class 0 OID 0)
-- Dependencies: 175
-- Name: djurnal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('djurnal_id_seq', 1, false);


--
-- TOC entry 2227 (class 0 OID 87626)
-- Dependencies: 176
-- Data for Name: djurnalajp; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2309 (class 0 OID 0)
-- Dependencies: 177
-- Name: djurnalajp_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('djurnalajp_id_seq', 1, false);


--
-- TOC entry 2272 (class 0 OID 96388)
-- Dependencies: 221
-- Data for Name: group; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2229 (class 0 OID 87634)
-- Dependencies: 178
-- Data for Name: hjurnal; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2310 (class 0 OID 0)
-- Dependencies: 179
-- Name: hjurnal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('hjurnal_id_seq', 1, false);


--
-- TOC entry 2231 (class 0 OID 87642)
-- Dependencies: 180
-- Data for Name: hjurnalajp; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2311 (class 0 OID 0)
-- Dependencies: 181
-- Name: hjurnalajp_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('hjurnalajp_id_seq', 1, false);


--
-- TOC entry 2264 (class 0 OID 87836)
-- Dependencies: 213
-- Data for Name: login; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2312 (class 0 OID 0)
-- Dependencies: 212
-- Name: login_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('login_id_seq', 1, false);


--
-- TOC entry 2233 (class 0 OID 87650)
-- Dependencies: 182
-- Data for Name: neracalajur; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2313 (class 0 OID 0)
-- Dependencies: 183
-- Name: neracalajur_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('neracalajur_id_seq', 1, false);


--
-- TOC entry 2235 (class 0 OID 87658)
-- Dependencies: 184
-- Data for Name: neracasaldo; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2314 (class 0 OID 0)
-- Dependencies: 185
-- Name: neracasaldo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('neracasaldo_id_seq', 1, false);


--
-- TOC entry 2269 (class 0 OID 96364)
-- Dependencies: 218
-- Data for Name: pelanggan; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2266 (class 0 OID 96340)
-- Dependencies: 215
-- Data for Name: pemasok; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2267 (class 0 OID 96348)
-- Dependencies: 216
-- Data for Name: pembelian; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2275 (class 0 OID 96412)
-- Dependencies: 224
-- Data for Name: pembelian_detail; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2268 (class 0 OID 96356)
-- Dependencies: 217
-- Data for Name: penjualan; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2274 (class 0 OID 96404)
-- Dependencies: 223
-- Data for Name: penjualan_detail; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2271 (class 0 OID 96380)
-- Dependencies: 220
-- Data for Name: produk; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2270 (class 0 OID 96372)
-- Dependencies: 219
-- Data for Name: retur_pembelian; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2273 (class 0 OID 96396)
-- Dependencies: 222
-- Data for Name: retur_penjualan; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2237 (class 0 OID 87666)
-- Dependencies: 186
-- Data for Name: tblajp; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2315 (class 0 OID 0)
-- Dependencies: 187
-- Name: tblajp_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblajp_id_seq', 1, false);


--
-- TOC entry 2239 (class 0 OID 87674)
-- Dependencies: 188
-- Data for Name: tblaktifa; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2316 (class 0 OID 0)
-- Dependencies: 189
-- Name: tblaktifa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblaktifa_id_seq', 1, false);


--
-- TOC entry 2241 (class 0 OID 87682)
-- Dependencies: 190
-- Data for Name: tblcatatan; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2317 (class 0 OID 0)
-- Dependencies: 191
-- Name: tblcatatan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblcatatan_id_seq', 1, false);


--
-- TOC entry 2243 (class 0 OID 87690)
-- Dependencies: 192
-- Data for Name: tblmasternamausaha; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2318 (class 0 OID 0)
-- Dependencies: 193
-- Name: tblmasternamausaha_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblmasternamausaha_id_seq', 1, false);


--
-- TOC entry 2245 (class 0 OID 87698)
-- Dependencies: 194
-- Data for Name: tblmasterpengguna; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tblmasterpengguna (kodeuser, namauser, katakunci, id) VALUES (NULL, 'alimin', 'admin', 1);
INSERT INTO tblmasterpengguna (kodeuser, namauser, katakunci, id) VALUES (NULL, 'admin', 'admin', 2);
INSERT INTO tblmasterpengguna (kodeuser, namauser, katakunci, id) VALUES (NULL, 'husain', 'admin', 3);


--
-- TOC entry 2319 (class 0 OID 0)
-- Dependencies: 195
-- Name: tblmasterpengguna_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblmasterpengguna_id_seq', 2, true);


--
-- TOC entry 2247 (class 0 OID 87706)
-- Dependencies: 196
-- Data for Name: tblmasterperiode; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2320 (class 0 OID 0)
-- Dependencies: 197
-- Name: tblmasterperiode_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblmasterperiode_id_seq', 1, false);


--
-- TOC entry 2249 (class 0 OID 87714)
-- Dependencies: 198
-- Data for Name: tblmasterperkiraan; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2321 (class 0 OID 0)
-- Dependencies: 199
-- Name: tblmasterperkiraan_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblmasterperkiraan_id_seq', 1, false);


--
-- TOC entry 2251 (class 0 OID 87722)
-- Dependencies: 200
-- Data for Name: tblneraca; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2322 (class 0 OID 0)
-- Dependencies: 201
-- Name: tblneraca_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblneraca_id_seq', 1, false);


--
-- TOC entry 2253 (class 0 OID 87730)
-- Dependencies: 202
-- Data for Name: tblpajak; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2323 (class 0 OID 0)
-- Dependencies: 203
-- Name: tblpajak_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblpajak_id_seq', 1, false);


--
-- TOC entry 2255 (class 0 OID 87738)
-- Dependencies: 204
-- Data for Name: tblperubahanmodal; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2324 (class 0 OID 0)
-- Dependencies: 205
-- Name: tblperubahanmodal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblperubahanmodal_id_seq', 1, false);


--
-- TOC entry 2257 (class 0 OID 87746)
-- Dependencies: 206
-- Data for Name: tblrugilaba; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2325 (class 0 OID 0)
-- Dependencies: 207
-- Name: tblrugilaba_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblrugilaba_id_seq', 1, false);


--
-- TOC entry 2259 (class 0 OID 87754)
-- Dependencies: 208
-- Data for Name: tblstatussetupsaldoawal; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2326 (class 0 OID 0)
-- Dependencies: 209
-- Name: tblstatussetupsaldoawal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tblstatussetupsaldoawal_id_seq', 1, false);


--
-- TOC entry 2261 (class 0 OID 87762)
-- Dependencies: 210
-- Data for Name: tmpsaldoblnlalu; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2327 (class 0 OID 0)
-- Dependencies: 211
-- Name: tmpsaldoblnlalu_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tmpsaldoblnlalu_id_seq', 1, false);


--
-- TOC entry 2093 (class 2606 OID 96339)
-- Name: barang_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY barang
    ADD CONSTRAINT barang_pkey PRIMARY KEY (kode_barang);


--
-- TOC entry 2049 (class 2606 OID 87792)
-- Name: bukubesar_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY bukubesar
    ADD CONSTRAINT bukubesar_pkey PRIMARY KEY (id);


--
-- TOC entry 2051 (class 2606 OID 87794)
-- Name: bukubesarajp_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY bukubesarajp
    ADD CONSTRAINT bukubesarajp_pkey PRIMARY KEY (id);


--
-- TOC entry 2053 (class 2606 OID 87796)
-- Name: djurnal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY djurnal
    ADD CONSTRAINT djurnal_pkey PRIMARY KEY (id);


--
-- TOC entry 2055 (class 2606 OID 87798)
-- Name: djurnalajp_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY djurnalajp
    ADD CONSTRAINT djurnalajp_pkey PRIMARY KEY (id);


--
-- TOC entry 2107 (class 2606 OID 96395)
-- Name: group_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "group"
    ADD CONSTRAINT group_pkey PRIMARY KEY (kode_group);


--
-- TOC entry 2057 (class 2606 OID 87800)
-- Name: hjurnal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY hjurnal
    ADD CONSTRAINT hjurnal_pkey PRIMARY KEY (id);


--
-- TOC entry 2059 (class 2606 OID 87802)
-- Name: hjurnalajp_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY hjurnalajp
    ADD CONSTRAINT hjurnalajp_pkey PRIMARY KEY (id);


--
-- TOC entry 2091 (class 2606 OID 87844)
-- Name: login_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY login
    ADD CONSTRAINT login_pkey PRIMARY KEY (id);


--
-- TOC entry 2061 (class 2606 OID 87804)
-- Name: neracalajur_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY neracalajur
    ADD CONSTRAINT neracalajur_pkey PRIMARY KEY (id);


--
-- TOC entry 2063 (class 2606 OID 87806)
-- Name: neracasaldo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY neracasaldo
    ADD CONSTRAINT neracasaldo_pkey PRIMARY KEY (id);


--
-- TOC entry 2101 (class 2606 OID 96371)
-- Name: pelanggan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pelanggan
    ADD CONSTRAINT pelanggan_pkey PRIMARY KEY (kode_pelanggan);


--
-- TOC entry 2095 (class 2606 OID 96347)
-- Name: pemasok_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pemasok
    ADD CONSTRAINT pemasok_pkey PRIMARY KEY (kode_pemasok);


--
-- TOC entry 2113 (class 2606 OID 96419)
-- Name: pembelian_detail_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pembelian_detail
    ADD CONSTRAINT pembelian_detail_pkey PRIMARY KEY (no_masuk);


--
-- TOC entry 2097 (class 2606 OID 96355)
-- Name: pembelian_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pembelian
    ADD CONSTRAINT pembelian_pkey PRIMARY KEY (no_masuk);


--
-- TOC entry 2111 (class 2606 OID 96411)
-- Name: penjualan_detail_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY penjualan_detail
    ADD CONSTRAINT penjualan_detail_pkey PRIMARY KEY (no_nota);


--
-- TOC entry 2099 (class 2606 OID 96363)
-- Name: penjualan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY penjualan
    ADD CONSTRAINT penjualan_pkey PRIMARY KEY (no_nota);


--
-- TOC entry 2105 (class 2606 OID 96387)
-- Name: produk_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY produk
    ADD CONSTRAINT produk_pkey PRIMARY KEY (kode_produk);


--
-- TOC entry 2103 (class 2606 OID 96379)
-- Name: retur_pembelian_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY retur_pembelian
    ADD CONSTRAINT retur_pembelian_pkey PRIMARY KEY (no_retur);


--
-- TOC entry 2109 (class 2606 OID 96403)
-- Name: retur_penjualan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY retur_penjualan
    ADD CONSTRAINT retur_penjualan_pkey PRIMARY KEY (no_retur);


--
-- TOC entry 2065 (class 2606 OID 87808)
-- Name: tblajp_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblajp
    ADD CONSTRAINT tblajp_pkey PRIMARY KEY (id);


--
-- TOC entry 2067 (class 2606 OID 87810)
-- Name: tblaktifa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblaktifa
    ADD CONSTRAINT tblaktifa_pkey PRIMARY KEY (id);


--
-- TOC entry 2069 (class 2606 OID 87812)
-- Name: tblcatatan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblcatatan
    ADD CONSTRAINT tblcatatan_pkey PRIMARY KEY (id);


--
-- TOC entry 2071 (class 2606 OID 87814)
-- Name: tblmasternamausaha_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblmasternamausaha
    ADD CONSTRAINT tblmasternamausaha_pkey PRIMARY KEY (id);


--
-- TOC entry 2073 (class 2606 OID 87816)
-- Name: tblmasterpengguna_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblmasterpengguna
    ADD CONSTRAINT tblmasterpengguna_pkey PRIMARY KEY (id);


--
-- TOC entry 2075 (class 2606 OID 87818)
-- Name: tblmasterperiode_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblmasterperiode
    ADD CONSTRAINT tblmasterperiode_pkey PRIMARY KEY (id);


--
-- TOC entry 2077 (class 2606 OID 87820)
-- Name: tblmasterperkiraan_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblmasterperkiraan
    ADD CONSTRAINT tblmasterperkiraan_pkey PRIMARY KEY (id);


--
-- TOC entry 2079 (class 2606 OID 87822)
-- Name: tblneraca_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblneraca
    ADD CONSTRAINT tblneraca_pkey PRIMARY KEY (id);


--
-- TOC entry 2081 (class 2606 OID 87824)
-- Name: tblpajak_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblpajak
    ADD CONSTRAINT tblpajak_pkey PRIMARY KEY (id);


--
-- TOC entry 2083 (class 2606 OID 87826)
-- Name: tblperubahanmodal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblperubahanmodal
    ADD CONSTRAINT tblperubahanmodal_pkey PRIMARY KEY (id);


--
-- TOC entry 2085 (class 2606 OID 87828)
-- Name: tblrugilaba_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblrugilaba
    ADD CONSTRAINT tblrugilaba_pkey PRIMARY KEY (id);


--
-- TOC entry 2087 (class 2606 OID 87830)
-- Name: tblstatussetupsaldoawal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tblstatussetupsaldoawal
    ADD CONSTRAINT tblstatussetupsaldoawal_pkey PRIMARY KEY (id);


--
-- TOC entry 2089 (class 2606 OID 87832)
-- Name: tmpsaldoblnlalu_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tmpsaldoblnlalu
    ADD CONSTRAINT tmpsaldoblnlalu_pkey PRIMARY KEY (id);


--
-- TOC entry 2282 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2015-05-15 10:57:41

--
-- PostgreSQL database dump complete
--

