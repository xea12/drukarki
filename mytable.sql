CREATE TABLE mytable(
   id            INTEGER  NOT NULL PRIMARY KEY 
  ,rodzaj        VARCHAR(26) NOT NULL
  ,Model         VARCHAR(45) NOT NULL
  ,uwagi         VARCHAR(23)
  ,WiFi          VARCHAR(3)
  ,LAN           VARCHAR(3)
  ,FAX           VARCHAR(3)
  ,NFC           VARCHAR(3)
  ,ADF           VARCHAR(3)
  ,duplex        VARCHAR(3)
  ,Skan_Dwustr   VARCHAR(3)
  ,A3            VARCHAR(8)
  ,cena_drukarki VARCHAR(8)
);
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (1,'atramentowe mono','Epson EcoTank M1180','1','tak','tak',NULL,NULL,NULL,'tak',NULL,NULL,'987');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (2,'atramentowe','Drukarka Canon Pixma IX6850',NULL,'tak','tak',NULL,NULL,NULL,NULL,NULL,'tak/ A3+','1 379 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (3,'atramentowe','Drukarka Epson EcoTank L1110',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'725 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (4,'atramentowe','Drukarka Epson L1250','1','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'700,34');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (5,'atramentowe','Drukarka HP Officejet Pro 6230','3','tak','tak',NULL,NULL,NULL,'tak',NULL,NULL,'397');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (6,'atram. Wielofunkc.','Hp Smart Tank 516','zapowied�',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (7,'atram. Wielofunkc.','Canon Pixma G2420','zapowied�',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (8,'atram. wielofunkc.','HP DeskJet 2710 ALL-in-One','2','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'253');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (9,'atram. Wielofunkc.','Brother DCP-T420 W','.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1110');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (10,'atram. Wielofunkc.','HP DeskJet Ink Advantage 3760','2','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'305');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (11,'atram. wielofunkc.','HP DeskJet 3762 All-in-One','2','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'310');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (12,'atram. Wielofunkc.','HP Smart Tank 515','0 w lutym ost. Sprzeda�','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'962 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (13,'atram. wielofunkc.','Epson EcoTank L3251 (czarna)','1','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'976 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (14,'atram. wielofunkc.','Epson EcoTank L3256 (bia�a)','01.sty','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'976 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (15,'atram. wielofunkc.','Epson EcoTank L5290','1','tak','tak','tak',NULL,'tak',NULL,NULL,NULL,'1 463 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (16,'atram. wielofunkc.','Epson EcoTank L4260','2','tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'1 569 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (17,'atram. wielofunkc.','HP Envy 6420e','2','tak',NULL,NULL,NULL,'tak','tak',NULL,NULL,'527 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (18,'atram. wielofunkc.','HP DeskJet 2720e','2','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'279');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (19,'atram. Wielofunkc.','Epson EcoTank L3151','2','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'981');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (20,'atram. Wielofunkc.','Canon MAXIFY MB2150','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (21,'atram. Wielofunkc.','HP Officejet Pro 6950','1','tak',NULL,'tak',NULL,'tak','tak',NULL,NULL,'645 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (22,'atram. wielofunkc.','HP Ink Tank Wireless 419 All-in-One (Z6Z97A)',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'839 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (23,'atram. wielofunkc.','HP Deskjet Ink Advantage 3788',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'321 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (24,'laserowa mono','Drukarka Xerox Phaser 3020','1','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'487 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (25,'laserowa mono','HP Laser 107 A','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (26,'laserowa mono','Brother HL-1223 WE','.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (27,'laserowa mono','Drukarka Brother HL-1210 WE','1','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'758');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (28,'laserowa mono','Drukarka Brother HL-L2352DW','01.sty','tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'986 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (29,'laserowa mono','Canon i-SENSYS LBP223 DW','1','tak','tak',NULL,NULL,NULL,'tak',NULL,NULL,'1 099 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (30,'laserowa mono','Drukarka HP LaserJet Pro M404 DN','2 � na wysy�k�',NULL,'tak',NULL,NULL,NULL,'tak',NULL,NULL,'920 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (31,'laserowa mono','Drukarka HP LaserJet Pro M15 W',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'547 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (32,'laserowa mono wielofunkc.','Brother DCP-1510 E','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'799 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (33,'laserowa mono wielofunkc.','Brother MFC-B7715 DW','0','tak','tak','tak',NULL,'tak','tak',NULL,NULL,'1 756 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (34,'laserowa mono wielofunkc.','Brother DCP-1623 WE','1','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1 186 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (35,'laserowa mono wielofunkc.','Brother DCP-L2532 DW','1','tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'1 379 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (36,'laserowa mono wielofunkc.','HP Laser MFP 135 W','1','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'898 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (37,'laserowe mono wielof.','Brother mfc-j3930 DW',NULL,'tak','tak','tak','tak','tak','tak','tak','tak','3 670,99');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (38,'laserowa mono wielofunkc.','HP LaserJet Pro MFP M28 W','2','tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1 007 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (39,'laserowa mono wielofunkc.','Brother DCP-1610 WE',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'969 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (40,'laserowa mono wielofunkc.','Brother DCP-B7520 DW','1','tak','tak',NULL,NULL,NULL,'tak',NULL,NULL,'1 670 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (41,'laserowa mono wielofunkc.','Brother DCP-L2512 D','1',NULL,NULL,NULL,NULL,NULL,'tak',NULL,NULL,'859 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (42,'laserowa kolor','Brother HL-L3270 CDW','1','tak','tak',NULL,'tak',NULL,'tak',NULL,NULL,'1962');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (43,'laserowa mono wielofunkc.','Xerox WorkCentre 3025 V_BI',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'745 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (44,'laserowa mono wielofunkc.','Xerox WorkCentre 3345 V DNI',NULL,'tak','tak','tak',NULL,'tak','tak',NULL,NULL,'1 699 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (45,'laserowa COLOR wielofunkc.','HP Color LaserJet Pro MFP M282 NW',NULL,'tak','tak',NULL,NULL,'tak',NULL,NULL,NULL,'2 493 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (46,'laserowa mono wielofunkc.','Brother DCP-B7500 D',NULL,NULL,NULL,NULL,NULL,NULL,'tak',NULL,NULL,'1 019 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (47,'laserowa mono wielofunkc.','HP LaserJet Pro M130 NW',NULL,'tak','tak',NULL,NULL,NULL,NULL,NULL,NULL,'1 059 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (48,'laserowa mono wielofunkc.','HP LaserJet Pro MFP M28a',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'677');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (49,'laserowa mono wielofunkc.','Xerox B205V_NI',NULL,'tak','tak',NULL,NULL,NULL,NULL,NULL,NULL,'804 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (50,'laserowa mono wielofunkc.','Brother MFC-L2712 DW',NULL,'tak','tak','tak',NULL,NULL,'tak',NULL,NULL,'1 246 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (51,'laserowa mono wielofunkc.','Xerox WorkCentre 3335V_DNI',NULL,'tak','tak','tak','tak','tak','tak',NULL,NULL,'1 246 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (52,'laserowa mono wielofunkc.','Canon i-SENSYS MF-264 DW',NULL,'tak','tak',NULL,NULL,'tak','tak',NULL,NULL,'1 246 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (53,'laserowa mono wielofunkc.','Brother DCP-L2552 DN',NULL,NULL,'tak',NULL,NULL,'tak','tak',NULL,NULL,'1176');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (54,'laserowa mono wielofunkc.','HP LaserJet Pro M130 FN',NULL,NULL,'tak','tak',NULL,NULL,NULL,NULL,NULL,'880 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (55,'laserowa mono wielofunkc.','Brother MFC-L2712 DN',NULL,NULL,'tak','tak',NULL,NULL,'tak',NULL,NULL,'1 246 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (56,'laserowa mono wielofunkc.','HP LaserJet Pro M130 FW',NULL,'tak','tak','tak',NULL,NULL,NULL,NULL,NULL,'1 132 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (57,'atramentowe','Drukarka Canon Pixma G2411',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'776');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (58,'atramentowe','Drukarka Epson EcoTank M1120',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'906 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (59,'atramentowe','Drukarka Canon Pixma TS705',NULL,'tak','tak',NULL,NULL,NULL,'tak',NULL,NULL,'532 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (60,'atram. wielofunkc.','Epson Expression Home XP-5100',NULL,'tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'642 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (61,'atram. wielofunkc.','HP Envy 6020e',NULL,'tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'426 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (62,'atram. wielofunkc.','HP DeskJet Plus 4120e',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'425');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (63,'atram. wielofunkc.','Epson WF-3820 DWF',NULL,'tak',NULL,'tak',NULL,NULL,'tak',NULL,NULL,'668 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (64,'atram. wielofunkc.','Epson WorkForce Pro WF-C5790 DWF',NULL,'tak','tak','tak','tak','tak','tak','tak',NULL,'2006');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (65,'atram. wielofunkc.','Canon PIXMA MG2550S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'411');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (66,'atram. wielofunkc.','Epson Expression Home XP3100',NULL,'tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'679 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (67,'atram. wielofunkc.','HP DeskJet Plus Ink Advantage 6075',NULL,'tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'441 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (68,'atram. wielofunkc.','Brother MFC-J3530 DW',NULL,'tak','tak','tak',NULL,'tak','tak',NULL,NULL,'1 925 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (69,'atram. wielofunkc.','HP Deskjet Ink Advantage 3790',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'321 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (70,'atram. wielofunkc.','Brother DCP-T520 W',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1 046 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (71,'atram. wielofunkc.','HP DeskJet Plus Ink Advantage 6475',NULL,'tak',NULL,NULL,NULL,'tak','tak',NULL,NULL,'607 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (72,'atram. wielofunkc.','Canon MAXIFY MB2755',NULL,'tak','tak',NULL,NULL,'tak','tak',NULL,NULL,'1 133 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (73,'atram. wielofunkc.','HP OfficeJet Pro 7720',NULL,'tak','tak','tak',NULL,'tak','tak',NULL,'tak','962');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (74,'atram. wielofunkc.','Epson Expression Premium XP-6000',NULL,'tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'793 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (75,'atram. wielofunkc.','HP Deskjet Ink Advantage 3775',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'380 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (76,'atram. wielofunkc.','Canon PIXMA TS3451',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'452 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (77,'atram. wielofunkc.','Epson WorkForce Pro  WF-C5710 DWF',NULL,'tak','tak','tak','tak','tak','tak','tak',NULL,'1 586 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (78,'atram. wielofunkc.','Epson EcoTank L5190',NULL,'tak','tak','tak',NULL,NULL,NULL,'tak',NULL,'1 666 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (79,'atram. wielofunkc.','HP Deskjet Ink Advantage 3789',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'403 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (80,'atram. wielofunkc.','Canon Pixma TS5352',NULL,'tak',NULL,NULL,NULL,NULL,'tak',NULL,NULL,'429 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (81,'laserowa mono','Drukarka Brother HL-1223 WE',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'746 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (82,'laserowa mono','Drukarka HP LaserJet Pro M102 W',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'787 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (83,'laserowa mono','Drukarka Brother HL-1110 E',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'461 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (84,'laserowa kolor','Drukarka Canon i-SENSYS LBP621 CW',NULL,'tak','tak',NULL,NULL,NULL,NULL,NULL,NULL,'1 311 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (85,'laserowa mono','Drukarka HP LaserJet Pro M102a',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'576 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (86,'laserowa mono','Drukarka HP Laser 107w',NULL,'tak',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'515 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (87,'laserowa mono','Drukarka Brother HL-L2312D',NULL,NULL,NULL,NULL,NULL,NULL,'tak',NULL,NULL,'649 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (88,'laserowa mono','Drukarka Lexmark B2236 DW',NULL,'tak','tak',NULL,NULL,NULL,'tak',NULL,NULL,'696 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (89,'laserowa mono','Drukarka HP Laserjet Pro 400 M402 DNE',NULL,NULL,'tak',NULL,NULL,NULL,'tak',NULL,NULL,'1 929 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (90,'laserowa mono','Drukarka HP LaserJet Pro M15a',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'453 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (91,'laserowa mono','Drukarka Xerox Phaser 3330 VDNI',NULL,'tak','tak',NULL,NULL,NULL,'tak',NULL,NULL,'1 132 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (92,'laserowa mono','Drukarka Canon i-SENSYS LBP162 DW',NULL,'tak','tak',NULL,NULL,NULL,'tak',NULL,NULL,NULL);
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (93,'laserowa COLOR wielofunkc.','HP Color LaserJet Pro MFP M282 NW',NULL,'tak','tak',NULL,NULL,'tak',NULL,NULL,NULL,'2 599 z�');
INSERT INTO mytable(id,rodzaj,Model,uwagi,WiFi,LAN,FAX,NFC,ADF,duplex,Skan_Dwustr,A3,cena_drukarki) VALUES (94,'laserowa COLOR wielofunkc.','Canon i-SENSYS MF-643 CDW',NULL,'tak',NULL,NULL,NULL,'tak','tak',NULL,NULL,'3 740 z�');
