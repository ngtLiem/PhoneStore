/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     30/09/2023 1:03:44 AM                        */
/*==============================================================*/


drop table if exists CHITIET_GH;

drop table if exists CHITIET_PN;

drop table if exists CHI_TIET_HD;

drop table if exists CHUC_VU;

drop table if exists DANH_GIA;

drop table if exists DON_GIA_BAN;

drop table if exists DON_VAN_CHUYEN;

drop table if exists GIO_HANG;

drop table if exists HOA_DON;

drop table if exists KHACH_HANG;

drop table if exists KHUYEN_MAI;

drop table if exists LOAI_SP;

drop table if exists NHAN_VIEN;

drop table if exists NHA_PHAN_PHOI;

drop table if exists NHA_SAN_XUAT;

drop table if exists NHA_VAN_CHUYEN;

drop table if exists PHAN_HOI;

drop table if exists PHIEU_BAO_HANH;

drop table if exists PHIEU_NHAP;

drop table if exists PHUONG_THUC_THANH_TOAN;

drop table if exists SAN_PHAM;

drop table if exists THOIDIEM;

drop table if exists TRANG_THAI;

/*==============================================================*/
/* Table: CHITIET_GH                                            */
/*==============================================================*/
create table CHITIET_GH
(
   SP_MA                int not null,
   GH_MA                int not null,
   CTGH_SOLUONG         float,
   primary key (SP_MA, GH_MA)
);

/*==============================================================*/
/* Table: CHITIET_PN                                            */
/*==============================================================*/
create table CHITIET_PN
(
   SP_MA                int not null,
   PN_STT               int not null,
   NV_MA                int not null,
   NPP_MASO             int not null,
   CTPN_SOLUONG         int,
   CTPN_DONGIA          float,
   primary key (SP_MA, PN_STT, NV_MA, NPP_MASO)
);

/*==============================================================*/
/* Table: CHI_TIET_HD                                           */
/*==============================================================*/
create table CHI_TIET_HD
(
   SP_MA                int not null,
   HD_STT               int not null,
   CTHD_SLB             int,
   CTHD_DONGIA          float,
   primary key (SP_MA, HD_STT)
);

/*==============================================================*/
/* Table: CHUC_VU                                               */
/*==============================================================*/
create table CHUC_VU
(
   CV_MA                int not null,
   CV_TEN               varchar(100) not null,
   CV_CALAMVIEC         varchar(150) not null,
   primary key (CV_MA)
);

/*==============================================================*/
/* Table: DANH_GIA                                              */
/*==============================================================*/
create table DANH_GIA
(
   DG_MA                int not null,
   KH_MA                int not null,
   SP_MA                int,
   DG_NOIDUNG           text not null,
   DG_PHANHOI           text not null,
   DG_SOSAO             int not null,
   DG_NGAYGIO           datetime not null,
   primary key (DG_MA)
);

/*==============================================================*/
/* Table: DON_GIA_BAN                                           */
/*==============================================================*/
create table DON_GIA_BAN
(
   TD_NGAYGIO           date not null,
   SP_MA                int not null,
   DGB_DONGIA           float not null,
   primary key (TD_NGAYGIO, SP_MA)
);

/*==============================================================*/
/* Table: DON_VAN_CHUYEN                                        */
/*==============================================================*/
create table DON_VAN_CHUYEN
(
   DVC_MA               int not null,
   NVC_MA               int not null,
   DVC_DIACHI           varchar(250) not null,
   DVC_TGBATDAU         datetime not null,
   DVC_TGHOANTHANH      datetime not null,
   primary key (DVC_MA)
);

/*==============================================================*/
/* Table: GIO_HANG                                              */
/*==============================================================*/
create table GIO_HANG
(
   GH_MA                int not null,
   KH_MA                int not null,
   GH_TONGTIEN          float not null,
   GH_TONGSP            int not null,
   primary key (GH_MA)
);

/*==============================================================*/
/* Table: HOA_DON                                               */
/*==============================================================*/
create table HOA_DON
(
   HD_STT               int not null,
   TT_MA                int not null,
   DVC_MA               int not null,
   NV_MA                int not null,
   PTTT_MA              int not null,
   KM_MA                int,
   GH_MA                int not null,
   HD_NGAYLAP           date not null,
   HD_TONGTIEN          float not null,
   primary key (HD_STT)
);

/*==============================================================*/
/* Table: KHACH_HANG                                            */
/*==============================================================*/
create table KHACH_HANG
(
   KH_MA                int not null,
   KH_TEN               varchar(100) not null,
   KH_DIACHI            text not null,
   KH_SDT               varchar(10) not null,
   KH_EMAIL             varchar(150) not null,
   KH_GIOITINH          char(1) not null,
   KH_NGAYDK            date not null,
   KH_TENDANGNHAP       varchar(50) not null,
   KH_MATKHAU           varchar(50) not null,
   KH_AVATAR            varchar(200) not null,
   primary key (KH_MA)
);

/*==============================================================*/
/* Table: KHUYEN_MAI                                            */
/*==============================================================*/
create table KHUYEN_MAI
(
   KM_MA                int not null,
   KM_TGBD              date,
   KM_TGKT              date,
   KM_GIATRI            float,
   primary key (KM_MA)
);

/*==============================================================*/
/* Table: LOAI_SP                                               */
/*==============================================================*/
create table LOAI_SP
(
   LSP_MA               int not null,
   LSP_TEN              varchar(150) not null,
   LSP_GHICHU           text not null,
   primary key (LSP_MA)
);

/*==============================================================*/
/* Table: NHAN_VIEN                                             */
/*==============================================================*/
create table NHAN_VIEN
(
   NV_MA                int not null,
   CV_MA                int not null,
   NV_TEN               varchar(100) not null,
   NV_DIACHI            text not null,
   NV_SDT               varchar(10) not null,
   NV_EMAIL             varchar(150) not null,
   NV_GIOITINH          char(1) not null,
   NV_NGAYDK            date not null,
   NV_TENDANGNHAP       varchar(50) not null,
   NV_MATKHAU           varchar(50) not null,
   NV_AVATAR            varchar(200) not null,
   NV_NGAYTUYEN         date not null,
   primary key (NV_MA)
);

/*==============================================================*/
/* Table: NHA_PHAN_PHOI                                         */
/*==============================================================*/
create table NHA_PHAN_PHOI
(
   NPP_MASO             int not null,
   NPP_TEN              varchar(150) not null,
   NPP_DIACHI           text not null,
   NPP_SDT              varchar(10) not null,
   NPP_EMAIL            varchar(150) not null,
   NPP_WEBSITE          varchar(250) not null,
   NPP_MOTA             text not null,
   primary key (NPP_MASO)
);

/*==============================================================*/
/* Table: NHA_SAN_XUAT                                          */
/*==============================================================*/
create table NHA_SAN_XUAT
(
   NSX_MA               int not null,
   NSX_TEN              varchar(100) not null,
   primary key (NSX_MA)
);

/*==============================================================*/
/* Table: NHA_VAN_CHUYEN                                        */
/*==============================================================*/
create table NHA_VAN_CHUYEN
(
   NVC_MA               int not null,
   NVC_TEN              varchar(100) not null,
   NVC_CHIPHI           int not null,
   NVC_MOTA             text not null,
   primary key (NVC_MA)
);

/*==============================================================*/
/* Table: PHAN_HOI                                              */
/*==============================================================*/
create table PHAN_HOI
(
   PH_MA                int not null,
   DG_MA                int not null,
   NV_MA                int not null,
   PH_NOIDUNG           text not null,
   PH_NGAYGIO           datetime not null,
   primary key (PH_MA)
);

/*==============================================================*/
/* Table: PHIEU_BAO_HANH                                        */
/*==============================================================*/
create table PHIEU_BAO_HANH
(
   PBH_SOPHIEU          int not null,
   SP_MA                int not null,
   PBH_NGAYBANHANG      date not null,
   PBH_NGAYHETHAN       date not null,
   PBH_NOIDUNGBH        text not null,
   primary key (PBH_SOPHIEU)
);

/*==============================================================*/
/* Table: PHIEU_NHAP                                            */
/*==============================================================*/
create table PHIEU_NHAP
(
   PN_STT               int not null,
   PN_NGAYNHAP          date not null,
   primary key (PN_STT)
);

/*==============================================================*/
/* Table: PHUONG_THUC_THANH_TOAN                                */
/*==============================================================*/
create table PHUONG_THUC_THANH_TOAN
(
   PTTT_MA              int not null,
   PTTT_TEN             varchar(150) not null,
   primary key (PTTT_MA)
);

/*==============================================================*/
/* Table: SAN_PHAM                                              */
/*==============================================================*/
create table SAN_PHAM
(
   SP_MA                int not null,
   NSX_MA               int not null,
   LSP_MA               int not null,
   SP_IMEI              int not null,
   SP_TEN               varchar(200) not null,
   SP_MAUSAC            varchar(50) not null,
   SP_TINHNANG          varchar(250) not null,
   SP_TGBH              varchar(100) not null,
   SP_HINHANH           longblob not null,
   SP_SOLUONGTON        int not null,
   SP_MANHINH           varchar(150) not null,
   SP_HDH               varchar(150) not null,
   SP_CAMTRUOC          varchar(100) not null,
   SP_CAMSAU            varchar(100) not null,
   SP_CPU               varchar(100) not null,
   SP_RAM               varchar(50) not null,
   SP_ROOM              varchar(50) not null,
   SP_SIM               varchar(80) not null,
   SP_PIN               varchar(80) not null,
   primary key (SP_MA)
);

/*==============================================================*/
/* Table: THOIDIEM                                              */
/*==============================================================*/
create table THOIDIEM
(
   TD_NGAYGIO           date not null,
   primary key (TD_NGAYGIO)
);

/*==============================================================*/
/* Table: TRANG_THAI                                            */
/*==============================================================*/
create table TRANG_THAI
(
   TT_MA                int not null,
   TT_TEN               varchar(100) not null,
   primary key (TT_MA)
);

alter table CHITIET_GH add constraint FK_CTGH_GH foreign key (GH_MA)
      references GIO_HANG (GH_MA) on delete restrict on update restrict;

alter table CHITIET_GH add constraint FK_CTGH_SP foreign key (SP_MA)
      references SAN_PHAM (SP_MA) on delete restrict on update restrict;

alter table CHITIET_PN add constraint FK_CTPN_NPP foreign key (NPP_MASO)
      references NHA_PHAN_PHOI (NPP_MASO) on delete restrict on update restrict;

alter table CHITIET_PN add constraint FK_CTPN_PN foreign key (PN_STT)
      references PHIEU_NHAP (PN_STT) on delete restrict on update restrict;

alter table CHITIET_PN add constraint FK_CTPN_SP foreign key (SP_MA)
      references SAN_PHAM (SP_MA) on delete restrict on update restrict;

alter table CHITIET_PN add constraint FK_DO_NV_LAP foreign key (NV_MA)
      references NHAN_VIEN (NV_MA) on delete restrict on update restrict;

alter table CHI_TIET_HD add constraint FK_MUABOIHD foreign key (SP_MA)
      references SAN_PHAM (SP_MA) on delete restrict on update restrict;

alter table CHI_TIET_HD add constraint FK_MUASP foreign key (HD_STT)
      references HOA_DON (HD_STT) on delete restrict on update restrict;

alter table DANH_GIA add constraint FK_CODANHGIA foreign key (KH_MA)
      references KHACH_HANG (KH_MA) on delete restrict on update restrict;

alter table DANH_GIA add constraint FK_DG_SP foreign key (SP_MA)
      references SAN_PHAM (SP_MA) on delete restrict on update restrict;

alter table DON_GIA_BAN add constraint FK_CODONGIABAN foreign key (SP_MA)
      references SAN_PHAM (SP_MA) on delete restrict on update restrict;

alter table DON_GIA_BAN add constraint FK_TAITHOIDIEM foreign key (TD_NGAYGIO)
      references THOIDIEM (TD_NGAYGIO) on delete restrict on update restrict;

alter table DON_VAN_CHUYEN add constraint FK_DO foreign key (NVC_MA)
      references NHA_VAN_CHUYEN (NVC_MA) on delete restrict on update restrict;

alter table GIO_HANG add constraint FK_COGH foreign key (KH_MA)
      references KHACH_HANG (KH_MA) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_COKM foreign key (KM_MA)
      references KHUYEN_MAI (KM_MA) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_DUOCLAPBOI foreign key (NV_MA)
      references NHAN_VIEN (NV_MA) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_DVC_HD foreign key (DVC_MA)
      references DON_VAN_CHUYEN (DVC_MA) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_RELATIONSHIP_25 foreign key (GH_MA)
      references GIO_HANG (GH_MA) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_THANHTOANBANG foreign key (PTTT_MA)
      references PHUONG_THUC_THANH_TOAN (PTTT_MA) on delete restrict on update restrict;

alter table HOA_DON add constraint FK_TT_HD foreign key (TT_MA)
      references TRANG_THAI (TT_MA) on delete restrict on update restrict;

alter table NHAN_VIEN add constraint FK_COCHUCVU foreign key (CV_MA)
      references CHUC_VU (CV_MA) on delete restrict on update restrict;

alter table PHAN_HOI add constraint FK_CUA_DG foreign key (DG_MA)
      references DANH_GIA (DG_MA) on delete restrict on update restrict;

alter table PHAN_HOI add constraint FK_DO_NV foreign key (NV_MA)
      references NHAN_VIEN (NV_MA) on delete restrict on update restrict;

alter table PHIEU_BAO_HANH add constraint FK_CO_BH foreign key (SP_MA)
      references SAN_PHAM (SP_MA) on delete restrict on update restrict;

alter table SAN_PHAM add constraint FK_DUOCSX foreign key (NSX_MA)
      references NHA_SAN_XUAT (NSX_MA) on delete restrict on update restrict;

alter table SAN_PHAM add constraint FK_THUOCLOAI foreign key (LSP_MA)
      references LOAI_SP (LSP_MA) on delete restrict on update restrict;

