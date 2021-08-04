 Server: localhost -  Database: packages
-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 04, 2021 at 02:20 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `packages`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `add-to-cart`
-- 

CREATE TABLE `add-to-cart` (
  `id` int(20) NOT NULL auto_increment,
  `pname` varchar(250) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` int(250) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

-- 
-- Dumping data for table `add-to-cart`
-- 

INSERT INTO `add-to-cart` (`id`, `pname`, `price`, `qty`, `pid`) VALUES 
(26, 'MAX ANEMIA PROFILE', '2,580', 0, 0),
(27, 'MAX ANEMIA PROFILE', '2,580', 0, 0),
(66, 'WELWISE  PROFILE - MALE', '4200', 1, 1),
(67, 'WELWISE  PROFILE - MALE', '4200', 1, 1),
(68, 'WELLWISE PROFILE- M', '4200', 1, 2),
(69, 'WELWISE  PROFILE - MALE', '4200', 0, 1),
(70, 'MAX - VITAMIN PANEL (BASIC) ', '1850', 0, 6);

-- --------------------------------------------------------

-- 
-- Table structure for table `all_packages`
-- 

CREATE TABLE `all_packages` (
  `id` int(11) NOT NULL auto_increment,
  `ptitle` varchar(250) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sku` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sample_type` varchar(255) NOT NULL,
  `reporting_time` varchar(250) NOT NULL,
  `sample_By` varchar(10) NOT NULL,
  `Instruction` varchar(200) NOT NULL,
  `description` varchar(600) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- 
-- Dumping data for table `all_packages`
-- 

INSERT INTO `all_packages` (`id`, `ptitle`, `price`, `sku`, `image`, `sample_type`, `reporting_time`, `sample_By`, `Instruction`, `description`) VALUES 
(1, 'WELLWISE PROFILE- F', '4200', 49674, 'well_3.jpg', 'Plasma- Two Fluoride,Grey Top +WB-EDTA,Lavender Top + 1 Serum-SST,Yellow Top ,Urine in screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Complete Heamogram with PS & ESR, Iron and Total Iron Binding Capacity, Ferritin,Blood Sugar Fasting,Glycosylated Haemoglobin (HbA1C), Creatinine,Urea, Sodium, Potassium, Chloride, Bicarbonate, Uric Acid, Total Proteins with Albumin, Globulin, SGOT, SGPT, Bilirubin Total and Direct, BUN ( Blood urea Nitrogen), Gamma GT, Alkaline Phosphatase, Cholesterol Total, VLDL, HDL, LDL, Cholesterol/ HDL Ratio, Triglycerides, 25 Hydroxy Vitamin D Level, Vitamin B12, Folate, FT3, FT4, TSH, Calcium, Inorganic Phosphorus, CRP (C-Reactive Protein)-High Sensitive, Urine Routine and Microscopy'),
(2, 'WELLWISE PROFILE- M', '4200', 49673, 'well_3.jpg', 'Plasma- Two Fluoride,Grey Top +WB-EDTA,Lavender Top + 1 Serum-SST,Yellow Top ,Urine in screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Complete Heamogram with PS & ESR, Iron and Total Iron Binding Capacity, Ferritin,Blood Sugar Fasting,Glycosylated Haemoglobin (HbA1C), Creatinine,Urea, Sodium, Potassium, Chloride, Bicarbonate, Uric Acid, Total Proteins with Albumin, Globulin, SGOT, SGPT, Bilirubin Total and Direct, BUN ( Blood urea Nitrogen), Gamma GT, Alkaline Phosphatase, Cholesterol Total, VLDL, HDL, LDL, Cholesterol/ HDL Ratio, Triglycerides, 25 Hydroxy Vitamin D Level, Vitamin B12, FT3, FT4, TSH, Calcium, Inorganic Phosphorus, Prostate Specific Antigen (P.S.A.) - Total, CRP (C-Reactive Protein)-High Sensitive, Urine Rout'),
(3, 'WELLWISE TOT- PRICE', '3200', 45036, 'well_3.jpg', 'Plasma- Two Fluoride,Grey Top +WB-EDTA,Lavender Top + 1 Serum-SST,Yellow Top ,Urine in screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Blood Sugar Fasting, Glycosylated Haemoglobin (HbA1c), VLDL Cholesterol, Cholesterol Total, Triglycerides, HDL Cholesterol, Direct LDL Cholesterol & Cholesterol/HDL Ratio, B.U.N (Blood Urea Nitrogen), Creatinine, Urea, Sodium, Potassium, Bicarbonate & Chloride, SGOT - Aspartate Amino Transferase, SGPT - Alanine Amino Transferase, Bilirubin Total and Direct Total Proteins with Albumin, Globulin, A/G Ratio, GGTP (Gamma GT), Alkaline Phosphate, Calcium, Uric Acid, 25 Hydroxy Vitamin D Level, Inorganic Phosphorous, Vitamin B12, FT3, FT4, TSH, Complete Hemogram , Urine Routine and Microscopyicrosco'),
(4, 'WELLWISE ADVANCE PRO', '2200', 45803, 'well_2.jpg', 'Plasma- Two Fluoride,Grey Top +WB-EDTA,Lavender Top + 1 Serum-SST,Yellow Top ,Urine in screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Complete Heamogram, PS & ESR, Urine Routine and Microscopy, Blood Sugar Fasting Fluoride Plasma, Glycosylated Haemoglobin (HbA1C),EDTA, Cholesterol Total, VLDL, HDL, LDL, Cholesterol/ HDL Ratio, Triglycerides Serum, Free T3, FreeT4, TSH, Creatinine Serum, Urea Serum, Sodium Serum, Potassium Serum, Chloride Serum, Bicarbonate Serum, Calcium Serum, Uric Acid Serum, Total Proteins with Albumin Globulin Serum, SGOT - Aspartate Amino Transferase Serum, SGPT - Alanine Amino Transferase Serum, Bilirubin Total and Direct, BUN Serum, Gamma GT Serum, Alkaline Phosphatase'),
(5, 'WELLWISE ESSENTIAL ', '999', 46399, 'well_1.jpg', 'Plasma- Two Fluoride,Grey Top +WB-EDTA,Lavender Top + 1 Serum-SST,Yellow Top ,Urine in screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am.', 'Daily', 'Overnight fasting is mandatory', 'CBC (Complete Blood Count),EDTA, Blood Sugar Fasting, Fluoride Plasma, Glycosylated Haemoglobin (HbA1C),EDTA, Cholesterol Total, Triglycerides Serum, TSH, Creatinine, Serum, Urea Serum, SGOT - Aspartate Amino Transferase, Serum, SGPT - Alanine Amino Transferase, Serum, Bilirubin Total and Direct, Urine Routine and Microscopy'),
(6, 'MAX - VITAMIN PANEL ', '1850', 45793, 'well_4.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', '25 Hydroxy Vitamin D Level,Serum Vitamin B12, Serum'),
(7, 'MAX BONE PROFILE', '2090', 44860, 'bone.jpg', 'WB-EDTA,Lavender Top + Serum- Two SST,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', '25 Hydroxy Vitamin D Level, Alkaline Phosphatase, Calcium, Inorganic Phosphorus, PTH (Parathyroid Hormone)- Intact'),
(8, 'MAX DIABETES PROFILE', '2090', 44862, 'diabetes_3.jpg', 'WB- EDTA,Lavender Top + Serum-Two SST,Yellow Top+Plasma- Two Sodium Fluoride,Grey Top, Urine in a screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am.', 'Daily', 'Overnight fasting is mandatory', 'Blood Sugar 2 Hr. PP, Blood Sugar Fasting,Cholesterol, Creatinine, Glycosylated Haemoglobin (HbA1C), HDL Cholesterol, LDL Cholesterol, MAU / Creatinine Ratio Urine, SGOT - Aspartate Amino Transferase,SGPT - Alanine Amino Transferase, Triglycerides, Urea,Urine Routine and Microscopy, VLDL Cholesterol'),
(9, 'MAX DIABETES EXT-PRO', '2740', 44864, 'diabetes_3.jpg', 'WB- EDTA,Lavender Top + Serum-Two SST,Yellow Top+Plasma- Two Sodium Fluoride,Grey Top, Urine in a screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Alkaline Phosphatase, Bicarbonate, Bilirubin Total and Direct, Blood Sugar 2 Hr. PP, Blood Sugar Fasting,Chloride, Cholesterol, Creatinine, GGTP (Gamma GT), Glycosylated Haemoglobin (HbA1C),HDL Cholesterol, LDL Cholesterol, MAU / Creatinine Ratio Urine, Potassium, SGOT - Aspartate Amino Transferase, SGPT - Alanine Amino Transferase, Sodium, Total Proteins with Albumin,Globulin,A/G,Triglycerides, Urea, Urine Routine and Microscopy, VLDL Cholesterol'),
(10, 'DIABETES SCREENING ', '480', 44863, 'diabetes_3.jpg', 'WB-EDTA,Lavender Top+ Two tubes Plasma-Sodium Fluoride,Grey Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Glycosylated hemoglobin,OGTT-2 samples'),
(11, 'DIABETES SCREENING 2', '410', 44865, 'diabetes_3.jpg', 'WB-EDTA,Lavender Top+ Two tubes Plasma-Sodium Fluoride,Grey Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Blood Sugar Fasting Glycosylated Haemoglobin (HbA1C)'),
(12, 'MAX ELECTROLYTE ', '410', 44909, 'electro.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Bicarbonate, Serum, Chloride, Serum, Potassium, Serum, Sodium, Serum'),
(13, 'MAX NUTRITION PROFILE', '1580', 44904, 'nutrition.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Albumin, Calcium,Ferritin, Total Protein, Vitamin B12 & Folate'),
(14, 'MAX ANEMIA PROFILE ', '2580', 44913, 'anemia_1.jpg', 'WB-EDTA,Lavender Top + Serum-SST,Yellow Top', 'Routine: Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am. Hb HPLC: Sample by Sun/Wed, report by Tues/Friday.', 'Daily', 'Not Specified', 'Complete Haemogram, Peripheral Smear and ESR, Ferritin,Haemoglobin HPLC,Iron and Total Iron Binding capacity, Reticulocyte Count, Vitamin B12 & Folat'),
(15, 'MAX WELLNESS  PRO', '2550', 44859, 'adolescent-wellness.jpg', 'WB-EDTA,Lavender Top + Serum-SST,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Glycosylated Hemoglobin,CBC,25 Hydroxy Vitamin D level,TSH,Iron and Total iron binding capacity'),
(16, 'MAX DENGUE PANEL', '890', 46319, 'dengue.jpg', 'WB-EDTA,Lavender Top + Serum- SST,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'CBC (Complete Blood Count),Dengue Serology (Ig M & Ig G),SGOT - Aspartate Amino Transferase,SGPT - Alanine Amino Transferase'),
(17, 'MAX CHIKUNGUNYA ', '1510', 46320, 'dengue.jpg', 'WB-EDTA,Lavender Top + Serum- SST,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am. PCR: Report by Tue/Thur/Sat', 'Daily', 'Not Specified', 'CBC (Complete Blood Count), Chikungunya PCR, SGOT - Aspartate Amino Transferase, SGPT - Alanine Amino Transferase'),
(18, 'MAX FEVER PANEL', '1820', 46317, 'fever.jpg', 'WB-EDTA,Lavender Top + Serum-SST,Yellow Top+ Urine in a sterile container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am. Culture: 3 days', 'Daily', 'Not Specified', 'Complete Haemogram, Peripheral Smear and ESR, Malaria Antigen, SGOT - Aspartate Amino Transferase, SGPT - Alanine Amino Transferase,Typhidot, Urine - Culture & Sensitivity, Urine Routine and Microscopy'),
(19, 'MAX FEVER PROFILE', '2360', 0, 'fever.jpg', '', '', '', '', ''),
(20, 'MAX FEV-ORIGIN/PUO', '4740', 0, 'fever.jpg', '', '', '', '', ''),
(21, 'MAX ALLERGY SCREENING ', '1440', 0, 'allergy_1.jpg', '', '', '', '', ''),
(22, 'MAX ALLERGY PROFILE', '8500', 0, 'allergy_1.jpg', '', '', '', '', ''),
(23, 'MAX ANTENATAL PANEL', '1790', 0, 'antenala_1_3.jpg', '', '', '', '', ''),
(24, 'MAX - ANTENATAL PRO  ', '3850', 0, 'antenala_1_3.jpg', '', '', '', '', ''),
(25, 'MAX - ANTENATAL EXT', '5070', 0, 'antenala_1_3.jpg', '', '', '', '', ''),
(26, 'MAX THALASSAMIA ', '930', 0, 'thalas.jpg', '', '', '', '', ''),
(27, 'MAX STD PANEL', '2100', 0, 'std.jpg', '', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `all_test`
-- 

CREATE TABLE `all_test` (
  `id` int(11) NOT NULL auto_increment,
  `ptitle` varchar(200) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sku` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sample_type` varchar(255) NOT NULL,
  `reporting_time` varchar(250) NOT NULL,
  `sample_By` varchar(10) NOT NULL,
  `Instruction` varchar(200) NOT NULL,
  `description` varchar(600) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

-- 
-- Dumping data for table `all_test`
-- 

INSERT INTO `all_test` (`id`, `ptitle`, `price`, `sku`, `image`, `sample_type`, `reporting_time`, `sample_By`, `Instruction`, `description`) VALUES 
(1, 'WELWISE  PROFILE - MALE', '4200', 49673, 'well_3.jpg', 'Plasma- Two Fluoride,Grey Top +WB-EDTA,Lavender Top + 1 Serum-SST,Yellow Top ,Urine in screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Complete Heamogram with PS & ESR, Iron and Total Iron Binding Capacity, Ferritin,Blood Sugar Fasting,Glycosylated Haemoglobin (HbA1C), Creatinine,Urea, Sodium, Potassium, Chloride, Bicarbonate, Uric Acid, Total Proteins with Albumin, Globulin, SGOT, SGPT, Bilirubin Total and Direct, BUN ( Blood urea Nitrogen), Gamma GT, Alkaline Phosphatase, Cholesterol Total, VLDL, HDL, LDL, Cholesterol/ HDL Ratio, Triglycerides, 25 Hydroxy Vitamin D Level, Vitamin B12, FT3, FT4, TSH, Calcium, Inorganic Phosphorus, Prostate Specific Antigen (P.S.A.) - Total, CRP (C-Reactive Protein)-High Sensitive, Urine Rout'),
(2, 'MAX BONE PROFILE', '2090', 44860, 'bone.jpg', 'WB-EDTA,Lavender Top + Serum- Two SST,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Components 25 Hydroxy Vitamin D Level, Alkaline Phosphatase, Calcium, Inorganic Phosphorus, PTH (Parathyroid Hormone)- Intact'),
(3, 'MAX ANEMIA PROFILE', '2580', 44913, 'anemia_1.jpg', 'WB-EDTA,Lavender Top + Serum-SST,Yellow Top', 'Routine: Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am. Hb HPLC: Sample by Sun/Wed, report by Tues/Friday.', 'Daily', 'Not Specified', 'Complete Haemogram, Peripheral Smear and ESR, Ferritin,Haemoglobin HPLC,Iron and Total Iron Binding capacity, Reticulocyte Count, Vitamin B12 & Folate'),
(4, 'MAX CARDIC PROFILE', '1870', 44861, 'cardiac-profile.jpg', 'WB-EDTA,Lavender Top + Serum- Two SST,Yellow Top ,Urine in screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Alkaline Phosphatase, Bicarbonate, Bilirubin Total and Direct, Chloride, Cholesterol, Creatinine, GGTP (Gamma GT), Glycosylated Haemoglobin (HbA1C),HDL Cholesterol, LDL Cholesterol,Potassium, SGOT - Aspartate Amino Transferase, SGPT - Alanine Amino Transferase, Sodium, Total Proteins with Albumin,Globulin,A/G,Triglycerides,Urea, Urine Routine and Microscopy, VLDL Cholestero'),
(5, 'MAX GYNAE  PRE OPERA', '2090', 45815, 'gynaeo.jpg', 'WB-EDTA,Lavender Top + Serum- SST,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Blood Grouping and RH Factor, HCV IgG, Hepatitis B Surface Antigen,HIV Test ( I and II ), VDRL (RPR)'),
(6, 'MAX GYNAE PROFILE - 1', '2950', 45704, 'gynaeo.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Anti Mullerian Hormone,Estradiol (E2), FSH - Follicle Stimulating Hormone, LH-Luteinizing Hormone , Prolactin, TSH'),
(7, 'MAX GYNAECOLOGICAL HORMONE', '1550', 44917, 'gynaeo.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Estradiol (E2), FSH - Follicle Stimulating Hormone, LH-Luteinizing Hormone ,Prolactin'),
(8, 'MAX ARTHIRITIS PANEL (FEMALE)-BASIC ', '2320', 44906, 'arthis_2.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am. ANA-ELISA :Report by Wed/Fri/Sun', 'Daily', 'Not Specified', 'ANA (Anti Nuclear Antibody) ? ELISA, Anti-CCP (Anti Cyclic Citrullinated Peptide), CRP (C-Reactive Protein), High Sensitive,Rheumatoid Factor(Quantitative)'),
(9, 'MAX ARTHIRITIS PANEL (MALE)-BASIC ', '4280', 44905, 'arthis_2.jpg', 'WB-EDTA,Lavender Top + Serum-SST,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am. ANA-ELISA :Report by Wed/Fri/Sun.HLA B27: 3 DAYS', 'Daily', 'Not Specified', 'ANA (Anti Nuclear Antibody) ? ELISA, Anti-CCP (Anti Cyclic Citrullinated Peptide), CRP (C-Reactive Protein), High Sensitive,HLA B-27, Flow Cytometry, Rheumatoid Factor(Quantitative), Uric Acid'),
(10, 'MAX ARTHIRITIS PANEL(FEMALE)', '5150', 44908, 'arthis_2.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am. ANA LIA: Next day after 7 pm.ANA IF: Report by Wed/Sat after 7 pm', 'Daily', 'Not Specified', 'ANA - LIA, ANA (Anti Nuclear Antibody) Immunofluorescence, Anti-CCP (Anti Cyclic Citrullinated Peptide), CRP (C-Reactive Protein), High Sensitive, Rheumatoid Factor(Quantitative'),
(11, 'MAX DIABETES EXTENDED PROFILE ', '2740', 44864, 'diabetes_3.jpg', 'WB- EDTA,Lavender Top + Serum-Two SST,Yellow Top+Plasma- Two Sodium Fluoride,Grey Top, Urine in a screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Alkaline Phosphatase, Bicarbonate, Bilirubin Total and Direct, Blood Sugar 2 Hr. PP, Blood Sugar Fasting,Chloride, Cholesterol, Creatinine, GGTP (Gamma GT), Glycosylated Haemoglobin (HbA1C),HDL Cholesterol, LDL Cholesterol, MAU / Creatinine Ratio Urine, Potassium, SGOT - Aspartate Amino Transferase, SGPT - Alanine Amino Transferase, Sodium, Total Proteins with Albumin,Globulin,A/G,Triglycerides, Urea, Urine Routine and Microscopy, VLDL Cholesterol'),
(12, 'MAX DIABETES PROFILE ', '2090', 44862, 'diabetes_3.jpg', 'WB- EDTA,Lavender Top + Serum-Two SST,Yellow Top+Plasma- Two Sodium Fluoride,Grey Top, Urine in a screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Blood Sugar 2 Hr. PP, Blood Sugar Fasting,Cholesterol, Creatinine, Glycosylated Haemoglobin (HbA1C), HDL Cholesterol, LDL Cholesterol, MAU / Creatinine Ratio Urine, SGOT - Aspartate Amino Transferase,SGPT - Alanine Amino Transferase, Triglycerides, Urea,Urine Routine and Microscopy, VLDL Cholesterol'),
(13, 'DIABETES SCREENING PROFILE ', '480', 44863, 'diabetes_3.jpg', 'WB-EDTA,Lavender Top+ Two tubes Plasma-Sodium Fluoride,Grey Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Glycosylated hemoglobin,OGTT-2 samples'),
(14, 'MAX - FERTILITY PANEL - MALE (BASIC) ', '3850', 45808, 'fertility.jpg', 'Plasma- Fluoride,Grey Top +WB-EDTA,Lavender Top + 1 Serum-SST,Yellow Top ,Urine in screw capped container,Semen in a screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Overnight fasting is mandatory', 'Complete Haemogram, Peripheral Smear and ESR, Blood Grouping and RH Factor Blood Sugar Fasting, Testosterone, Total, Free Testosterone, TSH,Serum FSH - Follicle Stimulating Hormone, LH-Luteinizing Hormone , Urine Routine and Microscopy Semen Analysis'),
(15, 'MAX FERTILITY PANEL - MALE  ', '4800', 45809, 'fertility.jpg', 'Plasma-Sodium Fluoride,Grey Top+WB-EDTA,Lavender Top+SST-Serum,Yellow Top, Semen in a sterile container,Urine in a screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am. Semen Culture:3 days', 'Daily', 'Overnight fasting is mandatory', 'Complete Haemogram, Peripheral Smear and ESR, Blood Grouping and RH Factor Blood Sugar Fasting, Urea, Creatinine, SGPT - Alanine Amino Transferase, Testosterone, Total, Free Testosterone, TSH, FSH - Follicle Stimulating Hormone, LH-Luteinizing Hormone , Urine Routine and Microscopy Semen Analysis Semen - Culture & Sensitivity'),
(16, 'MAX - PRE-OPERATIVE PANEL ', '3400', 45792, 'pre-oprative.jpg', 'Citrated platelet poor plasma-Sodium Citrate,Blue Top+ Plasma-Sodium Fluoride,Grey Top + WB-EDTA,Lavender Top +SST- Serum,Yellow Top+ Urine in a screw capped container', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Complete Haemogram, Peripheral Smear and ESR, Blood Sugar (Random), Urea, Creatinine, SGOT - Aspartate Amino Transferase, SGPT - Alanine Amino Transferase, TSH, Urine Routine and Microscopy Prothrombin Time (with INR), APTT (Partial Thromboplastin Time), HCV IgG, HIV Test ( I and II ), Hepatitis B Surface Antigen, Glycosylated Haemoglobin (HbA1C), Blood Grouping and RH Factor'),
(17, 'THROMBOPHILIA PROFILE', '15000', 28647, 'all-test-image.jpg', 'Plasma-Sodium Citrate,BlueTop', 'Report by Wed/Sat', 'Sample by ', 'Not Specified', 'Anti Thrombin - III - Functional, Factor V Leiden, Free Protein S, Lupus Anticoagulant, Protein C, Functional'),
(18, 'THYROID PROFILE', '950', 9245, 'all-test-image.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Free T3, Free T4, TSH'),
(19, 'THYROID PROFILE(CORD BLOOD) ', '1270', 24195, 'all-test-image.jpg', 'Cord Blood in SST,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', '{Cord Blood Free -T4, Cord Blood -Free-T3, Cord Blood TSH}'),
(20, 'HISTOPATHOLOGY KIDNEY PANEL -3Ÿ (L) ', '10500', 44017, 'all-test-image.jpg', 'Submit 3 kidney biopsy specimens.1 specimen in buffered normal saline for DIF,1 specimen in 10% formal saline for histopathology and 1 specimen in 3% buffered glutaraldehyde solution.', 'Brief Clinical history about native/transplant kidney is mandatory', 'Daily', '10 working days', '(Hitopathology,Special stains,DIF for IgG,IgA,IgM,C3 and C1q,IHC for C4d and SV40 (Transplant biopsy), Photomicrograph and Electron Microscopy)'),
(21, 'HISTOPATHOLOGY, KIDNEY BIOPSY (L) ', '3780', 26466, 'all-test-image.jpg', 'Submit 2 kidney biopsy specimens;1 in buffered nornal saline for DIF and 1 in 10% formal saline for histopathology', 'Brief clinical history in renal biopsy form for native/transplant kidney is mandatory', 'Daily', 'Report : 6 days', '(Histopathology,Special stains,DIF for IgG,IgM,IgA,C3 and C1q,IHC for C4D and SV40(Transplant Biopsy),Photomicrograph'),
(22, 'LIVER TRANSPLANT PROFILE ', '1590', 45124, 'all-test-image.jpg', 'Serum-Two tubes/Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'Alkaline Phosphatase, Bilirubin Total and Direct, Creatinine, Serum, Potassium, Serum, SGOT - Aspartate Amino Transferase, Serum, SGPT - Alanine Amino Transferase, Serum, Sodium, Serum, Total Proteins with Albumin,Globulin,A/G,Serum, Urea, Serum'),
(23, '1P19Q - FISH (C)', '12980', 36190, 'all-test-image.jpg', 'Formalin fixed paraffin embedded tissue block', 'Report after 2 weeks', 'Daily', 'Clinical history is mandatory', '1P19Q - FISH (C)'),
(24, '5 Alpha DHT', '2950', 24267, 'all-test-image.jpg', 'Serum, SST Tube, Yellow Top', 'Report by Fri', 'Sample by ', 'Specify age and sex on test request form', '5 Alpha DHT(Alphadihydrotestosterone) (L)'),
(25, '5-HIAA,24HRS URINE (L) ', '3830', 21739, 'all-test-image.jpg', '24 Hrs Urine in container provided by lab', 'Report by Sat/Wed', 'Sample by ', 'Patient should strictly avoid banana,alcoholic beverages,caffeine,tea/coffee,tobacco and strenuous exercise at least 3 days before sample collection.', '5-HIAA,24HRS URINE (L)'),
(26, 'ABSOLUTE NEUTROPHIL COUNT ', '250', 6131, 'all-test-image.jpg', 'WB, EDTA, Lavender Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am.', 'Daily', 'Not Specified', 'ABSOLUTE NEUTROPHIL COUNT '),
(27, 'ACE (ANGIOTENSING CONVERTING ENZ) ', '1100', 6255, 'all-test-image.jpg', 'Serum, SST Tube, Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Not Specified', 'ACE (ANGIOTENSING CONVERTING ENZ)'),
(28, 'ACHR , AUTOANTIBODIES (L) ', '2380', 27356, 'all-test-image.jpg', 'Serum, SST Tube, Yellow Top', 'Report by Thur/Mon', 'Sample by ', 'Avoid general anaesthetic or muscle relaxant drugs 24 hours prior to sampling', 'ACHR , AUTOANTIBODIES (L) '),
(29, 'ACUTE LYMPHOBLASTIC LEUKEMIA', '8830', 26314, 'all-test-image.jpg', 'WB/Bone Marrow: EDTA ,Lavender Top + Heparin,Green Top', '3 days', 'Daily', 'Not Specified', 'ACUTE LYMPHOBLASTIC LEUKEMIA'),
(30, 'ACUTE MYELOID LEUKEMIA, AML', '10000', 26315, 'all-test-image.jpg', 'WB/Bone Marrow: EDTA ,Lavender Top + Heparin,Green Top', '3 days', 'Daily', 'Not Specified', 'ACUTE MYELOID LEUKEMIA, AML,HEPARIN+EDTA '),
(31, 'ADA, SERUM ', '769', 25147, 'all-test-image.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by 2 pm-Report same day after 7 pm.Sample after 2 pm report next day after 10 am', 'Daily', 'Hemolysed samples are not acceptable', 'ADA, SERUM '),
(32, 'ALCOHOL (ETHANOL)-QUANTITATIVE (M) ', '1190', 6159, 'all-test-image.jpg', 'Serum-SST Tube,Yellow Top', 'Report after 2 days', 'Daily', 'Do not use spirit/alcohol while collection.Cap well.Always collect in a gel vacutainer and separate by centrifugation at the earliest in the same tube.Do not separate serum in another tube.', 'ALCOHOL (ETHANOL)-QUANTITATIVE  SERUM(M) '),
(33, 'ALDOLASE (L) ', '760', 5869, 'all-test-image.jpg', 'SST,Yellow Top/Plasma-EDTA ,Lavender Top/Heparin,Green Top', '2 days', 'Daily', 'Not Specified', 'ALDOLASE (L) '),
(34, 'ALDOSTERONE, SERUM (L) ', '1720', 6253, 'all-test-image.jpg', 'Serum-SST Tube,Yellow Top', 'Sample by Thurs', 'Report by ', 'Patient should be ambulatory/upright 2 hours prior to sampling', 'ALDOSTERONE, SERUM (L) '),
(35, 'ALLERGY INDIVIDUAL MARKER-GLUTEN ', '1970', 39469, 'all-test-image.jpg', 'Serum-SST Tube,Yellow Top', '3 day', 'Daily', 'Not Specified', 'ALLERGY INDIVIDUAL MARKER-GLUTEN '),
(36, 'ALLERGY INDIVIDUAL MARKER-POTATO ', '1120', 39536, 'all-test-image.jpg', 'Serum-SST Tube,Yellow Top', 'After 3 Days', 'Daily', 'Not Specified', 'ALLERGY INDIVIDUAL MARKER-POTATO '),
(37, 'ALLERGY SCREEN-PHADIATOP/INF ', '1050', 27657, 'all-test-image.jpg', 'Serum-SST Tube,Yellow Top', 'After 3 days', 'Daily', 'Not Specified', 'ALLERGY SCREEN-PHADIATOP/INF '),
(38, 'AMINOACIDS QUANTITATIVE, BLOOD, (L) ', '4260', 37399, 'all-test-image.jpg', '1 drop heel prick blood each on 3 spots of filter paper/WB-EDTA,Lavender Top', 'Report by Wed/Fri/Mon', 'Sample by ', 'Clinical details and drug history must accompany sample', 'AMINOACIDS QUANTITATIVE, BLOOD, (L) '),
(39, 'AML/ETO QUANTITATIVE RT PCR (C) ', '6560', 37906, 'all-test-image.jpg', 'WB/Bone Marrow- EDTA,Lavender Top', '6 day', 'Daily', 'Not Specified', 'AML/ETO QUANTITATIVE RT PCR (C) '),
(40, 'AMMONIA, EDTA SAMPLE ', '1170', 5819, 'all-test-image.jpg', 'Whole Blood -EDTA,Lavender Top', '2 hours', 'Daily', 'Plasma has to be separated immediately and put on ice.Outstation samples not acceptable.Hemolysed samples are not acceptable', 'AMMONIA, EDTA SAMPLE ');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `mob` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `fname`, `gender`, `email`, `pwd`, `addr`, `mob`) VALUES 
(1, 'manju', 'Female', 'manju@1234.com', '1234', 'Madhyamgram', '987654321'),
(2, 'Amit dalal', 'Male', 'amit@dalal43.com', '46d045ff5190f6ea93739da6c0aa19bc', 'Bihar', '98076543'),
(3, 'pawan Das', 'Male', 'pawan@das34.com', '912e79cd13c64069d91da65d62fbb78c', 'Bararsat', '789654321');

