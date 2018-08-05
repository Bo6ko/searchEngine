var cats = new Array ();cats["1"]="Автомобили";cats["2"]="Джипове";cats["3"]="Бусове";cats["4"]="Камиони";cats["5"]="Мотоциклети";cats["6"]="Селскостопански";cats["7"]="Индустриални";cats["8"]="Кари";cats["9"]="Каравани";cats["a"]="Яхти и Лодки";cats["b"]="Ремаркета";cats["c"]="Велосипеди";cats["u"]="Части";cats["v"]="Аксесоари";cats["w"]="Гуми и джанти";cats["y"]="Купува";cats["z"]="Услуги";

var pt2tm = new Array ();pt2tm["1"]="1";pt2tm["2"]="2";pt2tm["3"]="3";pt2tm["4"]="4";pt2tm["5"]="5";pt2tm["6"]="6";pt2tm["7"]="7";pt2tm["8"]="8";pt2tm["9"]="9";pt2tm["a"]="10";pt2tm["b"]="11";pt2tm["c"]="12";

var tm2pt = new Array ();tm2pt["1"]="1";tm2pt["2"]="2";tm2pt["3"]="3";tm2pt["4"]="4";tm2pt["5"]="5";tm2pt["6"]="6";tm2pt["7"]="7";tm2pt["8"]="8";tm2pt["9"]="9";tm2pt["10"]="a";tm2pt["11"]="b";tm2pt["12"]="c";

var cmm = new Array
(
  [
    ['AC','','Други'],
    ['Acura','','Integra','Mdx','Rl','Rsx','Slx','Tl','Tsx'],
    ['Aixam','','400','505','600'],
    ['Alfa romeo','','145','146','147','155','156','156 sportwagon','159','159 sportwagon','164','166','33','75','76','8C Competizione','90','Alfetta','Brera','Crosswagon q4','Giulia','Giulietta','Gt','Gtv','MiTo','Spider','Sprint','Sud'],
    ['Aston martin','','.','DBS','Db7','Db9','Rapide','V12 Vantage','V8 Vantage','Vanquish'],
    ['Audi','','100','200','50','60','80','90','A1','A2','A3','A4','A5','A6','A7','A8','Allroad','R8','Rs3','Rs4','Rs5','Rs6','Rs7','S2','S3','S4','S5','S6','S7','S8','Tt'],
    ['Austin','','Allegro','Ambassador','Maestro','Maxi','Metro','Mg','Mini','Montego','Princess'],
    ['BMW','','1','114','116','118','120','123','125','130','135','1500','1600','1602','1800','2','2 Active Tourer','2000','2002','220 d','225','228','230','235','240','2800','3','315','316','318','320','323','324','325','328','330','335','3gt','4','420','428','430','435','5','5 Gran Turismo','501','518','520','523','524','525','528','530','535','540','545','550','5GT','6','628','630','633','635','640','645','650','7','700','721','723','725','728','730','732','733','735','740','745','750','760','840','850','Izetta','M','M Coupе','M135','M2','M3','M4','M5','M6','Z1','Z3','Z4','Z8','i3','i8'],
    ['Bentley','','Arnage','Azure','Continental','Continental gt','Flying Spur','GT Convertible','Mulsanne','T-series'],
    ['Berliner','','Coupe'],
    ['Borgward','','Hansa'],
    ['Brilliance','','BC3','BS2 ','BS4','BS6','Dolphin','FRV','FSV','H220','H230','H320','H330','H530'],
    ['Bugatti','','Chiron','Veyron'],
    ['Buick','','Electra','Invicta','Park avenue','Regal','Skylark','Skyline'],
    ['Cadillac','','Allante','BLS','Brougham','Cts','Deville','Eldorado','Fleetwood','STS','Seville','Srx','Xlr'],
    ['Chevrolet','','Alero','Astro','Aveo','Beretta','Camaro','Caprice','Cavalier','Cobalt','Corvette','Cruze','Epica','Evanda','Hhr','Impala','Kalos','Lacetti','Lumina','Malibu','Matiz','Nova','Nubira','Orlando','Rezzo','Silverado','Spark','Ssr','Tacuma','Transsport','Volt'],
    ['Chrysler','','300c','300m','Crossfire','Daytona','Es','Gr.voyager','Gts','Interpid','Lebaron','Neon','New yorker','Pacifica','Pt cruiser','Saratoga','Sebring','Stratus','Vision','Voyager'],
    ['Citroen','','2cv','Ax','Axel','Berlingo','Bx','C - Zero','C-Elysee','C1','C15','C2','C3','C3 Picasso','C3 pluriel','C4','C4 Cactus','C4 Picasso','C5','C6','C8','Cx','DS3','DS4','DS5','Ds','Evasion','Grand C4 Picasso','Gsa','Gx','Ln','Nemo','Oltcit','Saxo','Visa','Xantia','Xm','Xsara','Xsara picasso','Zx'],
    ['Corvette','','C06 Convertible','C06 Coupe','Powa','Z06'],
    ['Dacia','','1100','1300','1304','1307','1310','1350','Dokker','Liberta','Lodgy','Logan','Nova','Pickup','Sandero','Solenza'],
    ['Daewoo','','Ace','Chairman','Cielo','Espero','Evanda','Fso','Kalos','Lacetti','Lanos','Leganza','Magnus','Matiz','Nexia','Nubira','Prince','Racer','Rezzo','Super','Tacuma','Tico'],
    ['Daihatsu','','Applause','Charade','Charmant','Copen','Cuore','Gran move','Hijet','Materia','Move','Sharade','Sirion','Trevis','Yrv'],
    ['Daimler','','Double six','Six','Sovereign'],
    ['Datsun','','Bluebird','Cherry','Stanza'],
    ['Dkw','','F102'],
    ['Dodge','','Avenger','Caliber','Caravan','Challenger','Charger','Coronet','Daytona','Interpid','Journey','Magnum','Neon','Ram','Shadow','Stealth','Stratus','Viper'],
    ['Dr','','1','2','3'],
    ['Eagle','','Premire','Talon','Vision'],
    ['FSO','','Polonez'],
    ['Ferrari','','308','348','360 modena','360 spider','458 Italia','488','599','California','Enzo','F12berlinetta','F430','F456m','F575m maranello','F612 scaglietti','FF','LaFerrari','Mondial 8','Testarossa'],
    ['Fiat','','1100','124','125','126','127','128','131','132','1400','1500','1800','500','500L','600','650','750','Albea','Argenta','Barchetta','Bertone','Brava','Bravo','Cinquecento','Coupe','Croma','Doblo','Duna','Fiorino','Idea','Linea','Marea','Multipla','Palio','Panda','Punto','Qubo','Regata','Ritmo','Scudo','Sedici','Seicento','Siena','Stilo','Strada','Tempra','Tipo','Topolino','Ulysse','Uno'],
    ['Ford','','12m','15m','17m','20m','Aerostar','B-Max','C-max','Capri','Connect','Consul','Cortina','Cosworth','Cougar','Countur','Courier','Crown victoria','Ecoline','Escort','Fiesta','Focus','Fusion','Galaxy','Granada','Ka','Mondeo','Mustang','Orion','Probe','Puma','Rs','S-Max','Scorpio','Sierra','Sportka','Streetka','Taunus','Taurus','Thunderbird','Windstar','Zephyr'],
    ['Geo','','Metro','Prizm','Storm'],
    ['Great Wall','','Voleex C10','Voleex C20','Voleex C30'],
    ['Heinkel','','Тrojan'],
    ['Honda','','Accord','Cbr','Cbx','City','Civic','Civic ballade','Concerto','Cr-v','Crx','Crz','Elysion','Fit','Fr-v','Hr-v','Insight','Integra','Jazz','Legend','Logo','Nsx','Odyssey','Prelude','Quintet','S2000','Shuttle','Stream'],
    ['Hyundai','','Accent','Atos','Coupe','Elantra','Excel','Genesis','Getz','Grace','Grandeur','I10','I20','I30','I40','Ix20','Lantra','Matrix','Pony','Porter','S','Santamo','Sonata','Sonica','Stelar','Tb','Trajet','Veloster ','Xg'],
    ['Ifa','','F9'],
    ['Infiniti','','Fx45','G','G coupe','G sedan','I','J','M','Q'],
    ['Innocenti','','Mini'],
    ['Isuzu','','Gemini','Piazza','Pickup'],
    ['Jaguar','','Daimler','Daimler double six','Daimler six','F-Type','S-type','Sovereign','Super v8','X-type','XE','Xf','Xj','Xjr','Xjs','Xjsc','Xk8','Xkr'],
    ['Kia','','Avella delta','Cadenza','Carens','Carnival','Ceed','Cerato','Clarus','Joecs','Joyce','Magentis','Niro','Opirus','Optima','Picanto','Pride','Pro ceed','Quoris','Rio','Sephia','Shuma','Soul','Spectra','Venga'],
    ['Lada','','1200','1300','1500','1600','2101','21011','21012','21013','21015','2102','2103','2104','21043','2105','21051','21053','2106','21061','21063','2107','21074','2108','21083','2109','21093','21099','2110','21213','Granta','Kalina','Nova','Oka','Priora','Samara'],
    ['Lamborghini','','Aventador','Countach','Diablo','Gallardo','Huracan','Murcielago','Reventon','Veneno'],
    ['Lancia','','A112','Aurelia','Beta','Dedra','Delta','Flavia','Kappa','Lybra','Musa','Phedra','Prisma','Thema','Thesis','Unior','Y','Y10','Ypsilon','Zeta'],
    ['Lexus','','CT200h','Es','Gs','Is','LFA','Ls','RC','Sc'],
    ['Lifan','','LF1010','LF320','LF520','LF620','LF6361','LF7130','LF7160'],
    ['Lincoln','','Continental','Ls','Mark','Mkz','Town car','Zephyr'],
    ['Lotus','','Elise','Europe','Evora','Exige'],
    ['Maserati','','3200 gt','Biturbo','Coupe gt','Ghibli','GranCabrio','GranTurismo','Gransport','Quattroporte','Spyder','Zagato'],
    ['Matra','','Murena','Rancho'],
    ['Maybach','','57','62'],
    ['Mazda','','121','2','3','323','5','6','626','929','Demio','Mpv','Mx-3','Mx-5','Mx-6','Premacy','Rx-7','Rx-8','Tribute','Xedos'],
    ['McLaren','','540C Coupe','570S Coupe','650S','675LT','F1','MP4-12C','P1'],
    ['Mercedes-Benz','','110','111','113','114','115','116','123','124','126','126-260','150','170','180','190','200','220','230','240','250','260','280','290','300','320','350','380','420','450','500','560','600','A','A 140','A 150','A 160','A 170','A 180','A 190','A 200','A 210','A 220','A 250','A45 AMG','AMG GT','AMG GT S','Adenauer','B','B 150','B 170','B 180','B 200','C','C 180','C 200','C 220','C 230','C 240','C 250','C 270','C 280','C 30 AMG','C 300','C 32 AMG','C 320','C 350','C 36 AMG','C 400','C 43 AMG','C 450 AMG','C 55 AMG','C 63 AMG','CL','CL 230','CL 320','CL 420','CL 500','CL 55 AMG','CL 600','CL 63 AMG','CL 65 AMG','CLA','CLA 180','CLA 200','CLA 220','CLA 250','CLA 45 AMG','CLC','CLC 160','CLC 180','CLC 200','CLC 220','CLC 230','CLC 250','CLC 350','CLK','CLK 55 AMG','CLK 63 AMG','CLS','CLS 250','CLS 300','CLS 320','CLS 350','CLS 500','CLS 55','CLS 55 AMG','CLS 63','CLS 63 AMG','Citan','E','E 200','E 220','E 230','E 240','E 250','E 260','E 270','E 280','E 290','E 300','E 320','E 350','E 36 AMG','E 400','E 420','E 43 AMG','E 430','E 50 AMG','E 500','E 55','E 55 AMG','E 60','E 60 AMG','E 63 AMG','GLA','GLA 180','GLA 200','GLA 220','GLA 250','GLA 45 AMG','R','R 280','R 300','R 320','R 350','R 500','R 63 AMG','S','S 250','S 280','S 300','S 320','S 350','S 400','S 420','S 430','S 450','S 500','S 55 AMG','S 550','S 600','S 63','S 63 AMG','S 65','S 65 AMG','SL','SL 55 AMG','SL 60 AMG','SL 63 AMG','SL 65 AMG','SLC','SLK','SLK 32 AMG','SLK 55 AMG','SLR','SLS','SLS AMG','Vaneo'],
    ['Mercury','','Marauder','Milan','Monarch','Villager'],
    ['Mg','','Mga','Mgb','Mgf','Tf','Zr','Zs','Zt','Zt-t'],
    ['Mini','','Clubman','Cooper','Cooper cabrio','Cooper s','Cooper s cabrio','Coupe','D one','One','One cabrio','Paceman'],
    ['Mitsubishi','','3000 gt','Carisma','Colt','Cordia','Eclipse','Galant','Grandis','Lancer','Sapporo','Sigma','Space gear','Space runner','Space star','Space wagon','Starion','Tredia'],
    ['Morgan','','Aero8'],
    ['Moskvich','','1360','1361','1500','2136','2138','2140','2141','21412','21417','2142','2715','401','403','407','408','412','426','427','503','Aleko','Иж'],
    ['Nissan','','100 nx','200 sx','240 z','280 z','300 zx','350z','370Z','Almera','Almera tino','Altima','Bluebird','Cedric','Cherry','Cube','Figaro','Gt-r','Kubistar','Laurel','Leaf ','Maxima','Micra','Note','Pickup','Pixo','Prairie','Primera','Pulsar','Sentra','Serena','Silvia','Skyline','Stantza','Sunny','Tiida','Versa','e-NV200'],
    ['Oldsmobile','','Achieva','Alero','Aurora','Bravada','Cutlass','Firenza','Intrigue','Regency','Silhouette','Toronado'],
    ['Opel','','Adam','Admiral','Agila','Ampera','Ascona','Astra','Calibra','Cascada','Combo','Commodore','Corsa','Diplomat','Gt','Insignia','Kadett','Kapitaen','Karl','Manta','Meriva','Monza','Omega','Rekord','Senator','Signum','Sintra','Speedster','Tigra','Vectra','Zafira'],
    ['Perodua','','Kancil','Kelisa','Kembara','Kenari','Nippa','Rusa'],
    ['Peugeot','','1007','104','106','107','108','2008','202','204','205','206','207','208','3008','301','304','305','306','307','308','309','402','403','404','405','406','407','5008','504','505','508','604','605','607','806','807','Bipper','Partner','RCZ','Range','iOn'],
    ['Pgo','','Cevennes','Speedster'],
    ['Plymouth','','Acclaim','Barracuda','Breeze','Colt','Grand voyager','Horizon','Laser','Neon','Prowler','Reliant','Road runner','Sundance','Volare','Voyager'],
    ['Polonez','','Pickup'],
    ['Pontiac','','Aztec','Bonneville','Fiero','Firebird','G6','Grand am','Grand prix','Gto','Lemans','Solstice','Sunbird','Sunfire','Tempest','Trans am','Trans sport','Vibe'],
    ['Porsche','','356 Speedster','911','918 Spyder','924','928','935','944','956','968','991','993','996','Boxster','Carrera','Cayman','Panamera'],
    ['Proton','','400','Arena','Persone','Satria'],
    ['Renault','','10','11','12','14','16','18','19','20','21','25','29','30','4','5','8','9','Alpine','Avantime','Bakara','Bulgar','Captur','Chamade','Clio','Espace','Express','Fluence','Fuego','Grand espace','Grand scenic','Kangoo','Koleos','Laguna','Laguna Coupe','Latitude','Megane','Modus','Nevada','Rapid','Safrane','Scenic','Symbol','Talisman','Twingo','Twizy','Vel satis','Wind','Zoe'],
    ['Rolls-Royce','','Ghost','Phantom','Silver Seraph','Wraith'],
    ['Rover','','111','114','200','213','214','216','220','25','400','414','416','418','420','45','600','618','620','623','75','800','820','825','827','City','Estate','Maestro','Metro','Mini','Montego','Streetwise'],
    ['SECMA','','F16','F440DCI','Fun Buggy','Fun Extreem','Fun Lander','Fun Quad'],
    ['Saab','','9-3','9-5','900','9000'],
    ['Samand','','LX'],
    ['Saturn','','Astra','Aura','Sky'],
    ['Scion','','Tc','Xa','Xb'],
    ['Seat','','Alhambra','Altea','Arosa','Cordoba','Exeo','Fura','Ibiza','Inka','Leon','Malaga','Marbella','Mii','Ronda','Terra','Toledo','Vario'],
    ['Shatenet','','Stella'],
    ['Shuanghuan','','Noble'],
    ['Simca','','1307','1308','1309','1510','Aront','Chrysler','Horizon','Shambord','Solara','Special','Versail'],
    ['Skoda','','100','1000','105','120','125','130','135','136','Citigo','Fabia','Favorit','Felicia','Forman','Octavia','Praktik','Rapid','Roomster','Superb'],
    ['Smart','','Forfour','Fortwo','Mc','Roadster'],
    ['Ssang yong','','Chairman','Rodius'],
    ['Subaru','','1800','BRZ','Baja','E12','Forester','G3x justy','Impreza','Justy','Legacy','Libero','Outback','Svx','Trezia','Vivio','XT','XV'],
    ['Suzuki','','Alto','Baleno','Celerio','Forenza','Ignis','Kizashi','Liana','Maruti','Reno','SX4','Sg','Splash','Swift','Wagon r'],
    ['Talbot','','1100','1310','Horizon','Matra','Murena','Samba','Simka','Solara'],
    ['Tata','','Aria','Estate','Indica','Mint','Nano'],
    ['Tavria','','.','Dana','Kombi','Slavuta'],
    ['Tazzari','','Zero'],
    ['Terberg','','Fl2850','Sl3000'],
    ['Tesla','','Model 3','Model S','Roadster','Roadster Sport'],
    ['Tofas','','Dogan','Kartal','Sahin'],
    ['Toyota','','Auris','Avalon','Avensis','Avensis verso','Aygo','Camry','Carina','Celica','Corolla','Corolla verso','Cressida','Crown','GT86','IQ','Matrix','Mr2','Paseo','Picnic','Previa','Prius','Scion','Sienna','Starlet','Supra','Tercel','Verso','Verso S','Yaris','Yaris verso'],
    ['Trabant','','600','601','Combi','T 1.1'],
    ['Triumph','','Acclaim','Dolomite','Herald','Spitfire','Stag','Tr6','Tr7'],
    ['VROMOS','','Kiwi','Rhea'],
    ['VW','','1200','1300','1302','1303','1500','1600','Alltrack','Arteon','Bora','CC','Caddy','Corrado','Derby','Eos','Fox','Golf','Golf Plus','Golf Variant','Jetta','K 70','Karmann-ghia','Lupo','Multivan','New beetle','Passat','Passat CC','Phaeton','Polo','Rabbit','Santana','Scirocco','Sharan','Touran','Up','Vento'],
    ['Volga','','22','24','3110','3111','M 20','M 21','Siber'],
    ['Volvo','','142','144','145','164','1800 es','240','244','245','262 c','264','340','343','344','345','360','440','460','480','66','740','744','745','760','765','770','780','850','940','960','C30','C70','P 1800','S40','S60','S70','S80','V40','V50','V60','V70','V90','V90 Cross Country','Xc70'],
    ['Warszawa','','223','232'],
    ['Wartburg','','1.3','311','312','353'],
    ['Wiesmann','','Gt','Mf3','Mf4','Mf5'],
    ['Xinshun','','XS-D055'],
    ['Zastava','','600','750','Florida','Gt 55','Koral','Miami','Yugo 45'],
    ['Zaz','','1102','1103','1105','965','966','968','Tavria'],
    ['Други','',' '],
    ['Победа','','М'],
    ['София','','С'],
    ['Чайка','','М']
  ],
  [
    ['Acura','','Mdx','Rdx'],
    ['Aro','','10','24','242','243','244','246','32','320','324','328','33'],
    ['Asia','','Rocsta'],
    ['Audi','','Q2','Q3','Q5','Q7','SQ5','SQ7'],
    ['BMW','','X1','X3','X4','X5','X6'],
    ['Bentley','','Bentayga'],
    ['Bertone','','Freeclimber'],
    ['Brilliance','','V3','V5'],
    ['Buick','','Rendezvous'],
    ['Cadillac','','Escalade','Srx'],
    ['Chevrolet','','Avalanche','Blazer','Captiva','Colorado','Equinox','Gmc','Niva','Suburban','Tahoe','Tracker','Trailblazer','Trax'],
    ['Chrysler','','Cherokee','Grand cherokee','Wrangler'],
    ['Citroen','','C-Crosser','C4 AIRCROSS'],
    ['Dacia','','Duster'],
    ['Daewoo','','Korando','Musso'],
    ['Daihatsu','','Feroza','Rocky','Taft','Terios','Wildcat'],
    ['Dodge','','Dakota','Durango','Journey','Nitro','Ram'],
    ['Dr','','5'],
    ['Fiat','','500Х','Campagnola','Freemont','Fullback'],
    ['Ford','','Bronco','EcoSport','Edge','Escape','Everest','Excursion','Expedition','Explorer','F150','F250','F350','F450','F550','F650','F750','Kuga','Maverick','Ranger'],
    ['Gaz','','469','69'],
    ['Geo','','Tracker'],
    ['Gmc','','Envoy','Jimmy','Saturn','Savana','Sierra','Sonoma','Tracker','Typhoon','Yukon'],
    ['Great wall','','Hover Cuv','Hover H5','Hover H6','Safe','Steed 3','Steed 5'],
    ['Honda','','Cr-v','Crosstour','Element','Hr-v','Passport','Pilot','Ridgeline'],
    ['Hummer','','H1','H2','H3'],
    ['Hyundai','','Galloper','IX35','IX55','Santa fe','Terracan','Tucson'],
    ['Infiniti','','Ex30','Ex35','Ex37','Fx 30','Fx 35','Fx 37','Fx 45','Fx 50','Q30','Q45','QX30','QX70','Qx','Qx4'],
    ['Isuzu','','Amigo','D-max','Rodeo','Tfs','Trooper','Vehi cross'],
    ['Iveco','','Massive'],
    ['Jaguar','','F-PACE'],
    ['Jeep','','Cherokee','Commander','Compass','Grand cherokee','Patriot','Renegade','Wrangler'],
    ['Jpx','','Montez'],
    ['Kia','','Mohave','Retona','Sorento','Sportage'],
    ['Lada','','Niva'],
    ['Laforza','','Magnum'],
    ['Land rover','','Defender','Discovery','Freelander','Range Rover Evoque','Range Rover Sport','Range rover'],
    ['Landwind','','Jx6476da'],
    ['Lexus','','Gx470','Lx','NX','RX330','Rx','Rx300','Rx350','Rx400h','Rx450'],
    ['Lifan','','X60'],
    ['Lincoln','','Mark Lt','Mark lt','Mkx','Navigator'],
    ['Mahindra','','Armada','Bolero','Cl','Commander','Goa','Marshall','Scorpio'],
    ['Maserati','','Levante'],
    ['Mazda','','B2200','B2500','B2600','BT-50','CX-5','CX-7','CX-9','Tribute','СХ-3'],
    ['Mercedes-Benz','','G','G 230','G 240','G 250','G 270','G 280','G 290','G 300','G 320','G 350','G 36 AMG','G 400','G 500','G 55 AMG','G 63 AMG','G 65 AMG','GL','GL 320','GL 350','GL 420','GL 450','GL 500','GL 55 AMG','GL 63 AMG','GLA','GLA 200','GLA 220','GLA 250','GLA 45 AMG','GLC 220','GLC 250','GLE','GLE 350','GLE 400','GLE 450 AMG','GLE 63 AMG','GLE 63 S AMG','GLE Coupe','GLK','GLS','ML','ML 230','ML 250','ML 270','ML 280','ML 300','ML 320','ML 350','ML 400','ML 420','ML 430','ML 450','ML 500','ML 55 AMG','ML 63 AMG'],
    ['Mercury','','Mountaineer'],
    ['Mini','','Countryman'],
    ['Mitsubishi','','ASX','L200','Montero','Outlander','Pajero','Pajero pinin','Pajero sport'],
    ['Nissan','','Armada','Frontier','Juke','Murano','NP300','Navara','Pathfinder','Patrol','Qashqai','Rogue','Terrano','Titan crew cab','Titan king','X-trail','Xterra'],
    ['Oldsmobile','','Bravada'],
    ['Opel','','Antara','Campo','Frontera','Mokka','Monterey'],
    ['Peugeot','','4007','4008'],
    ['Porsche','','Cayenne','Macan'],
    ['Renault','','Kadjar','Koleos','Scenic rx4'],
    ['SH auto','','Ceo'],
    ['Saab','','9-4X','9-7x'],
    ['Saturn','','Outlook','Vue'],
    ['Seat','','Ateca'],
    ['Shuanghuan','','Ceo'],
    ['Skoda','','Kodiaq','Yeti'],
    ['SsangYong','','Actyon','Actyon Sports','Korando','Korando Sports','Kyron','Musso','Rexton','Tivoli','XLV'],
    ['Subaru','','B9 tribeca'],
    ['Suzuki','','Grand vitara','Ignis','Jimny','SX4 S-Cross','Samurai','Santana','Sidekick','Sj','Vitara','X-90','XL-7'],
    ['Tata','','Safari','Sierra','Sumo','Telcoline','Xenon'],
    ['Tempo','','Gurkha','Judo'],
    ['Tesla','','Model X'],
    ['Toyota','','4runner','C-HR','Fj cruiser','Harrier','Highlander','Hilux','Land cruiser','Rav4','Sequoia','Tacoma','Tundra','Urban Cruiser','Venza'],
    ['Uaz','','452','460','469','669','69','Hunter','Patriot'],
    ['VW','','Amarok','Taro','Tiguan','Touareg'],
    ['Volvo','','XC60','Xc90'],
    ['Xinkai','','1021d','1021ls','1021s','2021d','2021s'],
    ['Други','',' ']
  ],
  [
    ['Avia','','20','21','30','31','A','Preslav'],
    ['Ayats','','Atlantis','Atlas 2','Bravo','City','Eclipse','Kronos','Platinum'],
    ['Barkas','','1.3','1000','B','M','W'],
    ['Bedford','','2.0','2.3','2.5','Blitz','D'],
    ['Blue bird','','Vision'],
    ['Bova','','Fhd12290','Fhd12360','Fhm12290','Fhm12360','Futura FHD 13380','Magic XHD120'],
    ['Brilliance','','Huasong'],
    ['Chavdar','','11','C'],
    ['Chevrolet','','Astro','Beauville','Express'],
    ['Citroen','','Berlingo','C','C15','Evasion','Jumper','Jumpy','Nemo'],
    ['Cobra','','Gl9'],
    ['DFSK','','K01','K02','K05','K07','V21','V22','V25','V27','V29'],
    ['Daewoo','','Damas','Labo','Tacuma'],
    ['Daf','','2.5','200','2105','2195','2800','33','3300','400','95','Berkhof','Den Oudsten','Joncheere','Leyland','Sb220','Smit'],
    ['Daihatsu','','Hijet','S'],
    ['Dodge','','Caravan'],
    ['Drogmoller','','Comet'],
    ['Fiat','','Ducato','Fiorino','Panda','Scudo','Talento','Ulysse'],
    ['Ford','','Aerostar','Cargo','Econoline','Econovan','Escort','Euroline','Express','F-350','Fiesta','Ft','Otosan','Tourneo','Transit'],
    ['Gaz','','21013','2705','5312','69'],
    ['Gazela','A'],
    ['Gmc','','Safari','Ventura'],
    ['Harmony','','VIP'],
    ['Hyundai','','County','H','Starex'],
    ['Ikarus','','250','255','256','260','55'],
    ['Isuzu','','Campo','Midi'],
    ['Iveco','','2.5','2.8','23010','260','30-8','35','35-8','3510','3512','3559','35c11','35c13','35c18','35s11','35s13','35s15','4010','4012','4510','4910','4912','50-9','5010','5080','50s13','50с18','59-12','60-11','60-12','60с15','6510','6512','7410','7914','80','8013','9013','Classic','Daily','Daily 65C','Daily 70C','Daily Citys','Daily Line','Daily Tourys','Daily Van','Deily 50C','Turbo','Uni'],
    ['Jonckheere','','Deauvilly'],
    ['Karosa','','731','734','735'],
    ['Kia','','Besta','Preggio','Towner'],
    ['King Long','','Airport Bus','XMQ 6100','XMQ 6101','XMQ 6105','XMQ 6106','XMQ 6110','XMQ 6111','XMQ 6116','XMQ 6117','XMQ 6118','XMQ 6119','XMQ 6120','XMQ 6121','XMQ 6122','XMQ 6126','XMQ 6127','XMQ 6128','XMQ 6129','XMQ 6130','XMQ 6139','XMQ 6140','XMQ 6141','XMQ 6180','XMQ 6181','XMQ 6606','XMQ 6608','XMQ 6660','XMQ 6730','XMQ 6752','XMQ 6770','XMQ 6798','XMQ 6800','XMQ 6801','XMQ 6802','XMQ 6840','XMQ 6841','XMQ 6850','XMQ 6858','XMQ 6859','XMQ 6886','XMQ 6891','XMQ 6892','XMQ 6895','XMQ 6898','XMQ 6900','XMQ 6901','XMQ 6925','XMQ 6930','XMQ 6960','XMQ 6996','XMQ 6998'],
    ['LDV','','Convoy','Cub','Maxus','Pilot'],
    ['Lancia','','Phedra'],
    ['Latvia','','Raf'],
    ['Ldv','','Convoy'],
    ['Lifan','','Foison'],
    ['Luaz'],
    ['Man','','10 220','23.362','230','240','469','A500','Bova','Nl202','Omnibus M3','Smit'],
    ['Marcopolo','','Andare','Senior','Viaggio','Viale'],
    ['Matra','','Rancho'],
    ['Mazda','','Bongo','E','Mpv'],
    ['Mega','','600','Electric','Multitruck'],
    ['Mercedes-Benz','','0202','0302','0303','0305','0309','0405','0614','100','108','1114','1117','1219','1319','1422','1517','1620','1622','1625','1628','1717','1729','1735','1748','1814','1828','1831','2.0','2.3','2.4','2.5','2.9','206','207','208','209','210','212','240','300','302','303','305','306','307','308','309','3090','310','312','313','316','320','404','405','406','407','408','409','410','412','420','507','508','509','510','512','607','608','609','611','612','613','709','711','714','808','809','811','813','814','815','817','840','913','914','B','Citan','Citaro','Cito','Conecto','Integro','Intouro','Lpl','Mb','Mb1000','Sprinter','Sprinter 208','Sprinter 209','Sprinter 210','Sprinter 211','Sprinter 212','Sprinter 213','Sprinter 214','Sprinter 216','Sprinter 308','Sprinter 310','Sprinter 311','Sprinter 312','Sprinter 313','Sprinter 314','Sprinter 315','Sprinter 316','Sprinter 318','Sprinter 410','Sprinter 411','Sprinter 412','Sprinter 413','Sprinter 414','Sprinter 416','Sprinter 418','Sprinter 512','Sprinter 515','Sprinter 516','Sprinter 518','Sprinter 519','Sprinter 616','Tourismo','Tourismo O 350 RHD','Tourismo SHD','Travego','V','V 200','V 220','V 230','V 250','V 280','Vario','Viano','Vito'],
    ['Mitsubishi','','Aero Midi','Canter','Delica','L','L300','Maraton','Spacegear'],
    ['Neoplan','','.','122 10','N 316 SHD','N116'],
    ['Nisa','','1.8','521','522'],
    ['Nissan','','Capstar','Interstar','King','L35','NV200','Primastar','Serena','Trade','Urvan','Vanette'],
    ['Opel','','Campo','Combo','Midi','Movano','Vivaro'],
    ['Otokar','','Navigo'],
    ['Paz','','672'],
    ['Peugeot','','806','807','Bipper','Boxer','Expert','J5','J9','Partner'],
    ['Piaggio','','Ape','Maxxi','Porter','Quarto'],
    ['Plimouth','','Gr.voyager','Grandvoyagr'],
    ['Pontiac','','Trans','Transsport'],
    ['Raf','','Lacia'],
    ['Renault','','Agora','Avantime','B90','Espace','Iliade','Master','Maxity','R','Trafic'],
    ['Robur','','Diesel','Termus'],
    ['Rocar','','D'],
    ['Rover','','Master','Sherpa'],
    ['Sanos','415pvr'],
    ['Scania','','A 30','A 50','A 80','Ayats','Beulas','Caetano','Citywide','Hispano','Irizar','Jonckheere','Noge','Omnicity','Omniexpress','Omnilink','Scala','Touring','Vest'],
    ['Setra','','120','H','S','S215hd'],
    ['Shayer','','691'],
    ['Skoda','','1203'],
    ['Smit','','Antares','Mercurius','Meteor','Orion'],
    ['Steyr','','1317','200M11'],
    ['Subaru','','Domingo','E','F','Fungi','J','Libero','Mini','Wagon'],
    ['Suzuki','','Carry','St'],
    ['Temsa','','Avenue','MD9','Opalin','Prestij','Safari','Safir'],
    ['Toyota','','DYNA','Hiace','Liteace','Previa','Proace'],
    ['Uaz','','39094','450','451','452','453','469','969'],
    ['VW','','Caddy','California','Caravelle','Crafter','Lt','Multivan','T1','T2','T3','T4','T5','T6','Transporter','Vanagon','Vm'],
    ['Vanhool','','Acron','EOS 233'],
    ['Vdl Berkhof','','Ambassador','Axial','Citea','Excellence','Midi','Synergie'],
    ['Vdl Bova','','Futura FHD','Futura FHM','Futura FHX','Futura FLD','Futura LHD','Lexio LD','Magiq HD','Magiq MHD','Magiq XHD'],
    ['Vdl Joncheere','','Arrow','Deauville','Jubilee','Mistral','Monaco','Shv'],
    ['Volvo','','B10m'],
    ['Zuk','','А']
  ],
  [
    ['Avia','','20','30','31','A','Agon','Preslav'],
    ['Barkas','B-1000'],
    ['Berna','','5vf'],
    ['Bmc','','1'],
    ['Bocheng','','BC-A','BC-B','WZ-A'],
    ['Bremach','','Brio','GR','Job','NGR','T-Rex','TGR 35-E3'],
    ['Bucher','','CityCat','Cityfant','Giletta','Gmeiner','OptiFant'],
    ['Citroen','','2.5','290','C'],
    ['Daewoo','','.'],
    ['Daf','','1100','1600','1700','1900','2.0','2.1','2.5','2.8','2300','2301','2500','2800','310','33','3300','3305','3600','400','45.120','45.150','45.160','55','55-180','55.120','6','60-180','600','75','800','85','85-360','85400','93.310','95','95-310','95-350','95-360','95-380','95.400','Ad 85','Ae','CF','Cf 85.430','Cf85','F','FT XF 106 ','Fa','Ginaf','Hf-480','Lf','XF','XF 105','XF 105 FT','Xf 95.380','Xf 95.430','Xf 95.480','Xf-05-350','Xf-480'],
    ['Daimler','','Benz'],
    ['Dennis','','Eagle','Elite','Premium'],
    ['Dodge','','Ram'],
    ['Eagle','','.'],
    ['Erf','','Ec11','Ec12'],
    ['Fabela','','.'],
    ['Faun','','Fr'],
    ['Fedra','','120'],
    ['Fiat','','19035','50','662','684','697','80','8013','Iveco','Om','Talento'],
    ['Foden','','3305','4340','4380','Alpha'],
    ['Ford','','0810','0812','0910','Cargo','Diesel','Transit'],
    ['Gaz','','24','2705','33021','3306','3307','33073','3309','51','52','53','5312','54','63','66','672','69','95-380'],
    ['Gazela','','.'],
    ['Ginaf','','F5','G5447'],
    ['Hanomag','','2.8','Henshel'],
    ['Henshel','','Diesel'],
    ['Hino','','330','380'],
    ['Hyundai','','H','Majtirou','Majtiroudek','Porter'],
    ['Ielch','','317','Td'],
    ['Ifa','','L','Multicar','W'],
    ['Ikarus','','255'],
    ['Inter','','Frigo'],
    ['International','','9200','9300','9400'],
    ['Isuzu','','2.8','Npr','Nqr'],
    ['Iveco','','100','120','120e18','1212','130','170e18','175.24','180','19','190-32','190-36','19033','19035','19038','19042','190е34','2.5','260 e 42 h','260-34','260m19','340e34','340e42h','340е38','35-12','3508','3510','35c11','35c13','35c15','35c18','410 E 44 H','440 E 37','440e42','440е38','4910','50-9','5009','5010','5013','5090','6.0','6010','6011','65-9','650m10','6510','65c15','65е','75e14','75e15','79.14','80','8013','8613','9013','Cargo','Cursor','Daily','EuroStar','Eurocargo','Eurocargo120e','Eurotech','Lt350','Magerus','Mp380e37w','Stralis','Trakker','Turbo','Unis'],
    ['Johnston','','Compact','Mid Sized','Sub compact','Truck Mounted'],
    ['Jum','','3'],
    ['Jumbo','','Frauehauf'],
    ['Kamaz','','51112','5210','53212','53221','54112','5511','55111','6520'],
    ['Kia','','2.2','3.5','F','Jumbo','K2500','K2700','K2900','Titan','Traid'],
    ['Kraz','','214','257','258'],
    ['Ladog','','G','T'],
    ['Latvia','','.'],
    ['Leiland','','T'],
    ['Liaz','','Interkuler'],
    ['Lt','','2.8','2000','35','40'],
    ['Luaz','','969'],
    ['Mack','','International','Trailmobil','Usa'],
    ['Madara'],
    ['Magerus','','Deutch','Deutch130m11'],
    ['Man','','10.150','10136','11','11136','12.170','12.222','12.224','12.284','12136','12168','12192','13168','13192','13230','14','14.224','14.225','14170','14192','14232','14284','15','15-240','15.224','15166','15190','15192','15240','16-240','16.168','16191','16192','168','17.192','17.232','18','18.192','18.232','18.272','18.413','18.513','19','19.272','19.280','19.281','19.290','19.292','19.320','19.321','19.332','19.361','19.414','19.463','19.604','19290','19320','19321','19331','19332','19343','19361','19362','19372','19402','19403','19422','2.0','22.240','22.242','22.291','22.292','22291','22312','22331','22332','22361','23.403','23.463','24.343','24220','24321','24322','25.322','25.362','25.422','25372','26','26.280','26.292','26.361','26.362','26.372','26.402','26.403','26.414','26.463','26321','27.332','27.372','27.460','28.403','3.5','3.8','30.362','32-321','32.361','32.362','32.372','32.402','32.403','32.414','321','32280','33.322','33.332','33.362','33.372','33.403','35','35.372','35.414','361','362','37','37.402','40','40.414','41','41.332','41.402','41.403','41.422','41.463','41.464','422','460','48.372','48362','6-113','6.103','6.90','6100','650','690','8-150','8-90','8.100','8.130','8.136','8.150','8.153','8.163','8.180','8.185','8136','814','890','9','9.150','9.220','9136','F1332','FE 410 A','Fe','Henger','Kofer','Koffer','L','Sr','Tga','Tga01','Tga410','Tgl','Tgm','Tgs','Tgx'],
    ['Man-vw','','3.8','6.90','8.136'],
    ['Maz','','20','2199','500','503','504','5335','54321','54331','5551','Super'],
    ['Mazda','','1013','1600','2.0','2000'],
    ['Mega','','Multitruck'],
    ['Mercedes-Benz','','0309','100','1013','1017','1018','1113','1114','1117','1120','12.192','1213','1217','1220','1314','1316','1317','1319','1320','1324','1414','1417','1419','1422','1424','1425','1513','1517','1530','1613','1617','1619','1620','1622','1623','1624','1625','1626','1628','1632','1633','1635','1636','1638','1644','1711','1719','1722','1726','1729','1733','1735','1748','1822','1824','1825','1827','1831','1834','1835','1836','1838','1840','1841','1842','1843','1844','1848','1853','1913','1920','1922','1923','1924','1928','1932','1933','1935','1938','1944','2.0','2.4','2.5','207','208','209','210','21017','22.25','2219','2222','2224','2225','2226','2228','2229','2232','2233','2235','2236','2422','2429','2433','2436','2448','25','25.34','2528','2535','2538','2540','2543','2544','25482','26','2626','2628','2632','2638','303','306','307','308','309','310','312','316','3234','3235','3238','3243','3244','33','3335','3340','3344','35','3533','3534','3538','3544','4','4044','406','407','408','409','410','411','412','4140','4143','4146 K','4243','4838','507','508','608','609','611','612','613','614','617','708','709','711','8013','808','809','811','813','814','814d','815','817','819','91','911','913','914','917','Actros','Antos','Arocs','Atego','Henger','Unimok','Voma','Wc'],
    ['Mini','','Bager','Tir'],
    ['Mitsubishi','','Canter','Maraton','Sx','Tdi'],
    ['Mudan','','MD'],
    ['Nisa','','125'],
    ['Nissan','','125','2.3','2.5','6.0','Atleon','Kabstar','L80.14','Trade'],
    ['Nova'],
    ['Om','','40'],
    ['Opel','','Blitz'],
    ['Peugeot','','J5'],
    ['Praga','','V3s'],
    ['Preslav','','203'],
    ['Raba','','Man'],
    ['Renault','','150','305','3210','340','357','360','365','4f','Berlie','Diesel','F','G','Kerax','Magnum','Mascott','Maxity','Midliner','Midlum','Pr','Premium','R','S','Sawien','Sg','Sn','T','Zanzi','Ае'],
    ['Robur','','3000','3001','Diesel'],
    ['Roman','19215'],
    ['Rover','','2.0','400'],
    ['Scania','','110','111','112','113','113m','114','124','140','141','142','143','144','163','164','81','82','91','92','93','94','Daf','G','G 230','G 270','G 310','G 340','G 380','G 420','G 470','G 480','Kuter','Lb','P','P 230','P 270','P 310','P 340','P 380','P 420','P 94','R','R 124','R 144','R 164','R 230','R 270','R 310','R 340','R 380','R 420','R 470','R 480','R 500','R 560','R 620','T112','Tir','Topline'],
    ['Seat','','Terra'],
    ['Seres','','2.2'],
    ['Setra','','110','120','150','H'],
    ['Sinotruk','','Hoka','Howo','Sitrak'],
    ['Sisu','','Carrier','Crane','Rock','Roll','Timber','Works'],
    ['Skoda','','Europe','Liaz','M24','Madara','Mt','Rt'],
    ['Steyr','','10s18','11s18','1291','13s21','1419','1491','14c21','14s18','15s18','15s23','17S23','19','22s31','25s27','26','26s31','26s34','26s37','26s46','32s31','33s37','590','61','680','690','691','6s10','791','891','9s14','9s18','B'],
    ['Tatra','','148','813','815','Euro'],
    ['Terberg','','Fl 1350','Fl 2000','Fl 3000','Fl2850'],
    ['Toyota','','2.8','Dyna','Pickup'],
    ['Trail','','Mobil'],
    ['Uaz','','2105','3303','3741','451','452','453','469','522','969'],
    ['Ural','','Crone','D'],
    ['VW','','440','Lt','Man','Taro'],
    ['Vanhool'],
    ['Volvo','','613','89','A25','F','F10','F12','F7','F88','F89','FE','Fh','Fh 12','Fh16 750 ','Fl','Fl 611','Fl12','Fm','Fm 7','Fm12','Fs','S10','S12','Sl','Tf'],
    ['Yalcin Dorse','','LBUZ'],
    ['Yamo','','.'],
    ['Zastava','','85.14b'],
    ['Zil','','130','131','133','151','155','157','164','3441','4331','43317','45050','450506','45506','463','550','555','D'],
    ['Камаz','','5410']
  ],
  [
    ['Aeon','','Aero','Cobra','Crossland','Echo','Elite','Minikolt','Overland','Pulsar','Quadro','Revo','Urban','Xboy'],
    ['American Ironhorse','','Bandera','Classic Chop','Ironhorse Ranger','Judge','LSC','Outlaw','Slammer','Tejas','Texas Chopper'],
    ['Aprilia','','125','200','250','50','AF1','Atlantic','Blue Marlin','Caponord','Classic','Climber','Dorsoduro','ETV','ETX','F1','Falco','Leonardo','MXV','Mana','Pegaso','RS4','RSV4','RXV','Rs','Rx','SRV','SXV','Scarabeo','Shiver','Sr','Sx','Tuareg','Tuono'],
    ['Arctic Cat','','Dvx','Mud Pro','Super Duty Diesel','TBX','TRV','Thundercat','XC','Youth'],
    ['Argo','','6 x 6 750 HDI','6 x 6 FRONTIER 650','6 х 6 FRONTIER EFI','6X6 Frontier 580','6x6 650 HD','8 x 8 750 HDI EU','8X8 Frontier 650','8x8 700 HD','8x8 700 HD EU','8x8 750 EFI','8x8 750 HDi','8x8 750 HDi SE','8x8 XTD','8x8 XTI','Centaur','Frontier'],
    ['Atala','','50','Uno'],
    ['Awo','','250','425'],
    ['BMW','','C','F','G','HP','K','R','S'],
    ['BRP','','Can-Am','Lynx','Sea-Doo','Ski-Doo'],
    ['Babetta','','206','207','210'],
    ['Balkan','','250','50','75'],
    ['Baotian','','Bt','Citibike','Eagle','Evolution','Falcon','Monza','Tanco'],
    ['Bashan','','BS','CK'],
    ['Bemi','','Alien','Apachi','Apollo','BMW','Buggy','CityQuad','Dirt','EGL','Eco-Cobra','Electro','Grizzly','Hummer','Huricane','Panzer','Poket','Raprot','Rebel','Renegade','Roady','Robin','Sky','Speedy'],
    ['Benelli','','125','250','254','304','350','354','49X','500','654','666','750','900','Cafe Racer','Caffenero','Century','Macis','Motard','Pepe','Quattronove','Sei','Tornado','Velvet','Zenzero'],
    ['Benzhou','','YY100T','YY110','YY125-4','YY125T','YY150','YY150T','YY250T','YY50QT','YY7','YY8'],
    ['Beta','','Alp','Ark','EVO','M4','Minicross','Minitrial','RE','Rr','Urban'],
    ['Bombardier','','DS','Outlander','Quest','Rally','Renegate','Traxter'],
    ['Buell','','1125','Blast','Firebolt','Lightning','M2','S1','S2','S3','Ulysses','X1','XB'],
    ['Buyang','','Bc','FA','FS'],
    ['Cagiva','','125','650','750','900','Canyon','E','Elefant','Gran Canyon','Mito','N1','Navigator','Planet','Raptor'],
    ['Can-Am','','Outlander'],
    ['Cfmoto','','CF625','CFORCE','Cf 500','E charm','E jewel','Fashion','Freedom','Glory','Jet Max','Rancher','Terracross','Terralander','UFORCE','Utv','V-Night','V3','V5','X-Lander','ZFORCE'],
    ['Cpi','','Aragon','Astor','Bravo','Formula','GTR','Hussar','Oliver','Popcorn','SM','SX','XS'],
    ['Cz','','125','150','175','180','250','350','380','500','513'],
    ['Daelim','','B-Bone','Besbi','Citi','Daystar','Mitler','Roadwin','S1','S2','S3'],
    ['Daytona','','DY','Evo','Hercules','Leopard','Miro','Mistral','Monster','Nova','Panther','Remix','Smile','Sprinter','Yes'],
    ['Derbi','','50','Gp-1','Gpr','Mulhacen','Rambla','Senda','Terra','Vamos'],
    ['Dkw','','ARE','Golem','Hummel','KM','Nz','ORE','Rt','SB','SS','Sport','ZS'],
    ['Ducati','','1000','1198','1199','125','250','350','450','500','600','620','650','748','749','750','800','848','851','860','888','900','906','907','916','996','998','999','Desmosedici','Diavel','Ducati 1299 Panigale','Ducati Scrambler','GT 1000','HM','Hypermotard ','M 900','Monster','Moto Guzzi Audace','Moto Guzzi Eldorado','Multistrada','PANIGALE 959','S4','SS','ST','Sport','SportClassic','Streetfighter','Superbike','Supersport','XDIAVEL'],
    ['Egl','','250','Lyda','Mad Max'],
    ['Etz','','150','250','251','550','80'],
    ['Falcon','','City Bug','Discovery','E-Charm','E-Jewel','Explorer','Junior','Nomad','Transformer','V3','V5','Vogue'],
    ['Fantic','','125','250','50','Caballero','Coach','Cruiser','Custom','Supersix','TX','Trial'],
    ['Fym','','Fy 150','Fy 250','Fy 50'],
    ['Garelli','','Flexi','GSP','Mosquito','Tiesse','XO','XR'],
    ['Gas gas','','125','200','280','300','450','Ec','Enducross','Fsr','HP','Halley','MC','Mx','Pampera','Sm','Txt','Wild'],
    ['Genata','','Big One','Cruiser','Daytona','Discovery','GT','Magnum','Milano','New Edition','Patrol','RC','Simple','Space','Supermoto','Wind Dream'],
    ['Generic','','Code','Cracker','Epico','Ideo','Inox','Jump','Mini Trigger','Onyx','ROC','Race','Sirion','Soho','Stream','TR','Toxic','Trigger','Urano','Vendetta','Vertigo','Worx','XOR','Zion'],
    ['Geo ming','','125','50'],
    ['Gilera','','124','125','150','350','50','500','600','Apache','Coguar','DNA','Fuoco','GP','GSM','H&K','NGR','Nexus','Nordwes','Rc','Rcr','Runner','Rv','Rx','SC','SMT','Saturno','Sp','Stalker','Storm','SuperSport','TT Surfer','Typhoon','VC','XR1','Zulu'],
    ['Go-ped','','Esr','Gsr','Gtr','I-ped'],
    ['Harley-Davidson','','Bad Boy','CVO','Custom','Dyna','Electra Glide Classic','Softail','Sportster','Street','Touring','Trike','V-Rod','VRCS'],
    ['Herkules','','280','300','320','50','500','Blizzard','Electra','Gladiator','Kingcobra','Megelli','Mirage','PR','Quadrift','Vanguard'],
    ['Honda','','125','150','250','599','750','919','ANF','AX-1','Activa','Ape','Aviator','Benly','Big Red','Big Ruckus','C70','C90','Ca','Camino','Cb','Cbf','Cbr','Cbx','Cd','Cg','Ch','Cj','Cl','Clr','Cm','Cmx','Cn','Cr','Crea','Crf','Crm','Crossrunner','Ct','Cx','DN','Deauville','Dio','Dream','Dylan','Elite','Eve','Express','F6','FES','FJR','FSC','FT','FTR','Faze','Fmx','Foresight','Forza','FourTrax','Fury','Gb','Gl','Gold Wing','Gorilla','Gyro','H','Helix','Hornet','Integra','Interceptor','Jazz','Lead','MSX125','MT','MTX','Magna','Metropolitan','Millenium','Monkey','NHX','Nc','Nighthawk','Nr','Ns','Nsr','Nt','Ntv','Nx','Paneuropean','Pantheon','Pc','Pcx','Ps','Px','RVF','Rc','Rebel','Reflex','Ruckus','Rune','S','S-Wing','SCV','SFX','SL','SLR','ST','SW','Sabre','Sh','Shadow','Silver Wing','Sky','Smart Dio','Stateline','Steed','Super Cub','TL','Tiger','Today','Trx','V-Twin','V30','V65','Valkyrie','Varadero','Vf','Vfr','Vigor','Vision','Vt','Vtr','Vtx','Wave','X-Eleven','X4','X8R-S','Xbr','Xl','Xlr','Xlv','Xr','Xrv','Z50R','Zoomer'],
    ['Husaberg','','FC','FE','FR','FS','FX','TE'],
    ['Husqvarna','','125','240','250','260','350','400','430','510','610','CR','FE','Husky Boy','Husky Nox','LT','Nuda','SM','SMS','Smr','TC','TE','TXC','WR','WRE'],
    ['Hyosung','','Aquila','Classic','Comet','Cruise','Ez','Fc','Ga','Gf','Gt','Gv','Karion','Kr','Ms','Rally','Rapier','Rt','Rush','Rx','Sb','Sd','Sense','Sf','St','Super Cab','Supercap','T','Te','Tn','X','Xrx'],
    ['Italjet','','50.it','Dragster','Fast Boy','Formula','Grifon','Jack','JetSet','Jupiter','Marco Polo','Millennium','Pit Jet','Roller Craft','Torpedo','Velocifero'],
    ['Jawa','','125','250','330','350','353','50','500','593','640','650','693','812','90','Chopper','Mustang','Т'],
    ['Jianshe','','Js110-G','Js125-6B','Js250','Js400','Mountain Lion','Wild Cat'],
    ['Jinlun','','JL 125','JL 150','JL 250','JL 50'],
    ['Jocsport','','300','600'],
    ['Jonway','','Explorer','GTS','Grizzy','MLN','MLY - A','MSG - B','MSG - D','MSG - E','Predator','Vajra','Victoria','YY'],
    ['Kaisar','','ATV','KS','Nikmot','Pearl','Ruby','Vilmot'],
    ['Kawasaki','','100','1000','125','1400','250','350','400','500','620','650','750','900','A','Bayou','Brute Force','CSR','Concours','Coyote','D-Tracker','EL','EN','ER','EX','Eliminator','Estrella','F-11','FX','G3','G5','Gpx','Gpz','Gs','Gt','Gto','Gtr','H','J125','J300','Kd','Kdx','Ke','Kfx','Kh','Kl','Kle','Klf','Klr','Kls','Klv','Klx','Km','Kmx','Kr','Kvf','Kx','Kz','Mule','Ninja','Prairie','Stockman','Super Sherpa','Tengai','Versys','Vn','Voyager','Vulcan','W','Z','Zephyr','Zl','Zn','Zr','Zrx','Zx','Zxr','Zzr'],
    ['Keeway','','ARN','ATV','Agora','CUB Partner','Cooper','Cruiser','Electric','F-act','Flash','Focus','Gallop','Goccia','Hacker','Hurricane','Kee','Land Cruiser','Matrix','Milan','Outlook','Partner','Pixel','Pixie','RKS','RKV','RX3','RY','Ranger','Scud','Silverblade','Speed','Superlight','Supershadow','Swan','TX','Venus','Wizard','X-Ray'],
    ['Kinetic','','4S','Blaze','Luna'],
    ['Kioti','','Mechron 2210'],
    ['Ktm','','105','1190','125','144','150','200','250','300','350','380','40','400','450','50','500','505','520','525','530','560','600','620','625','640','65','660','690','80','85','950','990','Adventure','Comet','Duke','Duke III','EXC','EXC-E','EXE','Enduro','Enduro LC-4','Freeride','GS','Incas','LC','Prestige','RC8','SMC','SMR','SX','SX-F','SXR','Sting','Super Duke','Supermoto','Supermoto LC-4','XC'],
    ['Kymco','','125','250','Activ','Active','Agility','Agility','Bet and Win','Caro','City','Cruiser','DJ','Dink','Downtown','Filly','G-Dink','Grand Dink','Grand King','Grandvista','Heroism','Hipster','Jetix','K-Pipe','K-XCT','KR','Like','MXU','Many','Maxxer','Mongoose','Movie','Myroad','New DINK','Nexxon','People','Pulsar','Quannon','RS','Sento','Sooner','Spike','Sting','Straight','Stryker','Sunboy','Super','Top Boy','Venox','Vitality','Xciting','Yagaer','Yager','Yup'],
    ['Laverda','','1000','1200','500','600','650','668','750','Formula 650','Ghost','Ghost','OR','SFC','Sport','TTS'],
    ['Lifan','','250-4','Chimp','Cub','Delta','Elite','Goldfish','Huntaway','LF','Matrix','Metro','Smart'],
    ['Linhai','','150','300','400','50','500','700','80','М150','М550','М550L'],
    ['MV Agusta','','1000','1100','125','150','350','500','750','800','900','910','Brutale','F3','F4'],
    ['Malaguti','','125','A2 Phantom','Blog','Centro','Ciak','DVD','Drakon','F','Fifty','Firefox','Grizzly','Madison','Password','Phantom','RST','Spidermax','X3M','XSM','XTM','Yesterday'],
    ['Mbk','','125','350','Booster','Cityliner','EC03','Flame','Flipper','MachG','Nitro','Oceo','Ovetto','Skycruiser','Skyliner','Sport','Stunt','Waap','X-Limit','X-Over','X-Power'],
    ['Mikilon','','Crack','Defender','Dual Sports','Hammer','Kids','Motorcross','Pentora','Pit Bike'],
    ['Moto Guzzi','','1000','1100','1200','250','254','500','650','750','850','940','Bellagio','Breva','California','Centauro','Daytona','Falcone','Griso','Ippogrifo','Jackal','LeMans','MGS-01','Mille GT','NTX','Nevada','Norge','Quota ','SP','Sport','Stelvio','TS','Targa','V'],
    ['Moto Morini','','1200','125','250','3 1/2','350','400','500','501','9 1/2','AMEX','Corsaro','Dart','Granpasso','Scrambler'],
    ['MotorHispania','','Duna','KN','MH','RX','RYZ'],
    ['Mz','','125','150','151','15o','175','250','251','25o','350','50','660','Cross','Etz','Str','Trofi'],
    ['Nsu','','250'],
    ['Pannonia','','250','P 10','P 12','P 20','P 21','T 5','T 5'],
    ['Peugeot','','BlackSat','Blaster','C-Tech','Citystar','Elystar','Geopolis','Jet','Kissbee','LXR','Looxor Advantage','Ludix','Rally Victories','Satelis','Snake','Speedfight','Sum Up','TKR','Tweet','V-Clic','Vivacity','Vogue','XP','XPS','XR'],
    ['Piaggio','','B','BV','Beverly','Bravo','Carnaby','Chimati','Ciao','Fly','Free','Hexagon','Liberty','Mp3','Nrg','PX','Sfera','Skipper','Sphere','Typhoon','X7','X8','X9','XEvo','Zip'],
    ['Pioneer Nevada','','125','250'],
    ['Pocketbike','','Big','Small'],
    ['Polaris','','Ace','General','Outlaw','Phoenix','RZR','Ranger','Scrambler','Slingshot','Snowmobile','Sportsman','Trail Blazer','Trail Boss'],
    ['Puch','','125','175','250','350','600','GS','Imola','M','MC','Maxi','Puh','VZ'],
    ['Qingqi','','Buffrlo','Fire Storm','Fizz','Grampus','Jet','Koala','Leopard','Liger','QM','Ranger','Shuttle','Sport','Sum-Up','Tracker','V-Clic','Variant','Wealthy'],
    ['Rewaco','','RF1 GT','RF1 LT','RF1 ST'],
    ['Rieju','','125','50','MRX','MX','Marathon','Mius','Mrt','NKD','Pacific','RR','RRX','Rs','SMX','Spike','Tango','Toreo','e-Bicy'],
    ['Romet','','707','717','727','747','767','CRC','Delivery','Division','EV1','K','Maxi','R','RR','RXL','Retro','Soft Chopper','Z','Zetka'],
    ['Sachs','','49er','B-805','Bee','Dirty Devil','Eagle','FYM','LF','MadAss','Oliver Electro','Prima','Quattrocento','Roadster','SR','SX1','Saxonette Luxus','Saxylight','SpeedForce','SpeedJet','Typhoon','VS','X Road','XTC','ZX'],
    ['Sampo','','Falcon','Max','Phantom'],
    ['Sanyang','','Attila'],
    ['Scoot','','Balkan','Bull','Civico','Classic','Colt','Eyes','Rambo','Smart','Sniper','Space','Wasp'],
    ['Shineray','','Xy'],
    ['Simson','','50','51','Enduro','Mz','S','Sr','Start'],
    ['Ski-Doo','','Summit'],
    ['Sundiro','','125','50','90','Xdz'],
    ['Sunsto','','Advance','Angel','Ceres','Demon','EMS','Eroma','LF','M','MA','Vonroad'],
    ['Suzuki','','250','AP','Access','Address','An','B-King','Bandit','Birdie','Boost King','Boulevard','Burgman','Crosscage','DL','DR-Z','DS','Djebel','Dr','FX','GN','GNX','GP','GR','GV','GZ','Gemma','Gladius','Grasstracker','Gs','Gsf','Gsr','Gsx','Gsxr','Gt','Hayabusa','Hokuto','Impulse','Inazuma','Intruder','JR','Katana','KingQuad','LC','LS','Lets','Lets4','Marauder','Ozark','PV','QuadRacer','QuadSport','RE','RMX','Rf','Rg','Rgv','Rm','Rmz','Rs','Rv','SB','SFV','SP','SR','ST','SV','Savage','Sepia','Shogun','Sixteen','Skywave','Stratosphere','Street Magic','T','TC','TL','TR','TU','Tl','Tornado','Ts','US','V-strom','VL','VS','VX','VZ','VZR','Van Van','Volty','Volusia','XF','e-Lets'],
    ['Swm','','Cross'],
    ['Sym','','ALLO','Citycom','Combiz','Crox','Fiddle','GTS Joymax','HD2','Jet','Jet Basix','Jet Euro X','Jet Sport X','Joyride','Maxsym','Mio','Orbit','Quadlander','Symphony','Tonik','TrackRunner','VS','Wolf','Xpro'],
    ['Tango','','Jr80','Lr','Mini','Rover','Treker'],
    ['Tatran','','125'],
    ['Tgb','','Avenger','Blade','Target'],
    ['Tm','','Racing'],
    ['Tomos','','125','15','APN 6','ATX','Alpino','Arrow','BT','Flexer','Hip-Hop','LX','MC','Pack’R','Quadro','Racing','Revival','SE','SM','ST','Sportmate','Sprint','Street Soul','Streetmate','Whizzr’d','Youngst’r'],
    ['Triumph','','Adventurer','America','Bandit','Bonneville','Centennial Edition Daytona','Daytona','Legend','New Tiger','Rocket','Scrambler','Speed Four','Speed Triple','Speedmaster','Sprint','Street Triple','Street Twin','Super','T','TR','TSS','TSX','TT','Thruxton','Thunderbird','Tiger','Trident','Trophy'],
    ['Truva','','Tr 100','Tr 125','Tr 150'],
    ['Tzun','','50'],
    ['UGBEST','','E-boy','Express','Irock','Koala','LD','Pony','Retro','Romex','Tres','UF','UR8','UX','UX4','VAX'],
    ['VROMOS','','ECO Cruiser','ECO Speed'],
    ['Vanetti','','50','L'],
    ['Vespa','','125','150','50'],
    ['Victory','','Boardwalk','Cross Country','Cross Country Tour','Cross Roads','Hammer','High-Ball','Jackpot','Judge','Vegas','Vision Tour'],
    ['Wangye','','Wy125t-102','Wy125t-53','Wy125t-56','Wy125t-74','Wy150-5','Wy150t-3','Wy150t-57','Wy50qt-16','Wy50qt-4','Wy50qt-40','Wy50qt-58'],
    ['Wonsim','','Wj'],
    ['Wt','','Cross wt 07','Giove beta ','Giove eta','Giove sigma','Kalypso wt 150','Kaos wt','Kobra wt','Marte alfa','Marte beta','Marte delta','Marte gamma','Mokos wt 525','Motard wt 07','Pit wt 07','Poseydon wt 400','Race wt 07','Ram wt','Saturno gamma','Thor wt','Xx','Zev'],
    ['Wuxi ','','Comet','Harvey','Scoozy','Spidy','Vengo','Wcg','Winton','Zoomba'],
    ['Xingyu','','Xy250L'],
    ['Xingyue','','125','50'],
    ['Xinshun','','XS-D055','XS-D058'],
    ['Yamaha','','2ja','3kj','4e','AG','AS 3','Active','Aerox','Alba','Axis','BT','Banshee','Big Bear','Black Max','Black X-Max','Brrees','Bruin','Bw','C3','CA','CP','CS5','CT','Crux','Cygnus X','DS','DSC','Drag Star','Dt','Dtr','EC-03','FZ1','FZ16','FZ6','FZ6N','FZ6R','FZ8','FZS','Fazer','Fj','Fjr','Fz','Fzr','Fzx','G5','GT80','GTS','Giggle','Gladiator','Grand Axis','Grand Majesty','Grizzly','IT','Jog','KS','LB','LS','MR50','MX','Majesty','Maxim','Midnight Warrior','Morphous','Mt-01','Mt-03','Mt-07','Mt-09','Neos','Night Max','PW','R 3','R 5','RX','Raider','Raptor','Rd','Riva','Road Star','Roadliner','Royal Star','Rs','Rz','SDR','ST','SZR','Serow','Slider','Sr','Srx','Star','Stratoliner','Stryker','T','T-max','TD','TR','TRX','TX','TY','TZ','Tdm','Tdr','Tricker','Tt','Ttr','Tw','Tzr','U7E','V-Max','V-Star','VMX','Versity','Vino','Virago','Vity','Vox','WF','Warrior','Why','Wolverine','Worldcrosser','Wr','X-City','X-max','XC','XJ','XJ6','XJR','XV','XVZ','Xenter','Xj','Xs','Xt','Xtz','Xvs','YAS','YB','YBR','YQ','YW','YX','YZF-R1','YZF-R6','Yfm','Yfz','Yp','Yz','Yzf','Zuma'],
    ['Yawa','','125','250','330','350','353','50','500','593','593','638','639','640','650','812','90','Chopper','Mustang','T'],
    ['Yiben','','YB50QT-15','YB50QT-19','YB50QT-3','YB50QT-4'],
    ['Yuki','','Hs','Lb','Qs','Qt','Yk'],
    ['Znen','','FB','King','Q','Revival'],
    ['Zongshen','','Zs110-60','Zs150gy-10','Zs200gy-2'],
    ['Zundapp','','125','50','GS','KS'],
    ['iO Scooter','','1500 GT','Florenz','King Kong','Manhattan','Vienna'],
    ['Восход','','ВП-150','Восход','Восход-2','Восход-3','Вятка'],
    ['Вятка','','150'],
    ['Днепр','','11','12','16','K','KM3','MB','MT'],
    ['Други','',' '],
    ['Дунавия','','125'],
    ['Иж','','350','49','5','56','PS-650 Rotax','Saigak','Springbok','Корнет','Планета','Спорт','Юнкер','Юпитер'],
    ['Карпати','','Карпати-1','Карпати-2'],
    ['Ковровец','','К-125','К-175','К-55'],
    ['Мини мотоциклети','','Мини мотоциклети'],
    ['Минск','','125'],
    ['Поръчкови','','Cruisers','Enduro','Naked','Retro','Scooter','Touring','Други'],
    ['Рига','','Дельта','Рига-1','Рига-11','Рига-13','Рига-16','Рига-17С','Рига-22','Рига-26 Mini Stella','Рига-3','Рига-4','Рига-5','Рига-7'],
    ['ТМЗ','','5.951 Тула'],
    ['Урал','','Classic','Cosa','Cross','De Luxe','ET2','ET4','GT','GTS','GTV','Granturismo','LX','LXV','Lux','M-63','M-66','M-67','M-67-6','M-70','PX','Patrol','Ranger','Red October','Red Star','Retro','S','Snow Leopard','Solo','Sportsman','T','Vespa','Zafferano','Волк','Ворона','Вьюга','Пустиня','Тайга','Тройка','Турист']
  ],
  [
    ['Балировачка','','Challenger','Cicoria','Claas','Deutz-Fahr','Feraboli','Fortshritt','Gallignani','John Deere','Krone','New Holland','Sipma','Tonutti','Unia','Welger','Wolagri','Киргистан','Друга марка'],
    ['Брана','','Agrisem','Akpil','Amazone','Ares','Biso','Bomet','Brix','Bugnot','CASE IH','Dalbo','Evers','ERMAK','Farmet','Feraboli','Frontier','Galucho','Gascon','Gaspardo','Great Plains','Gregoire Besson','He-Va','Horsch','International','Jean de Bru','John Deere','KUHN','Kariotakis','Krause','Krone','Kverneland','Landoll','Lemken','Ma/Ag','Maschio','Mcfatlane','Papadopoulos','Quivonge','Rabe','Simba','SMS','Staltech','Sunflower','Unia','Vaderstad','Valentini','Vogel & Noot','Друга марка'],
    ['Валяк','','Ammann','Amazone','Brandt','Bremer','Bomag','Dalbo','Dynapac','Hamm','He-va','Horsch','Hypac','Kverneland','Lemken','Rabe','Tigges','Vaderstad','Друга марка'],
    ['Друг вид','','Български','Внос'],
    ['Комбайн','','Agrocom','Amazone','Becker','Bergmann','Biso','Bruns','Busatis','BVL-van Lengereich','Carraro','CASE IH','Caterpillar','Calyson','Challenger','Claas','Deutz-Fahr','Doll','Ducker','Duvelsdorf','Dronninborg','Eberhardt','Eicher','FAHR','Fella','Fendt','Fiat','Fortschritt','Ford','Frost','Gaspardo','Geringhoff','Ginaf','Grimme','Hanomag','Hassia','Harvestec','Holder','Howard','International','Iseki','JCB','John Deere','Kramer','Kemper','Krone','Kubota','Lamborghini','Landini','Landsberg','Lanz','Laverda','Lely','Lemken','Maschio','Massey Ferguson','McCormick','MDW','Mengele','Mercedes-Benz','Multicar','New Holland','Niemeyer','Oros','OXBO','Porsche','Pottinger','PZ - Vicon','Rabe','Rau','Rauch','Reformwerke Wels','Regent','Rostselmash','Same','Sampo','Shelbourne','SIP','Steyr','Strautmann','Unimog','Valmet','Vogel&Noot','Weidemann','Дон','Змай','Нива','Друга марка'],
    ['Култиватор','','Amazone','Akpil','BRIX','BVL','Bomet','CASE IH','Gaspardo','Dalbo','Downhill','Evers','ERMAK','FMS','Farmet','Foukas','Frost','Galucho','Great Plains','Gungor','Hatzenbichler','Horsch','Howard','John Deere','IrTem','KUHN','Knoche','Kongskilde','Krause','Krone','Kurt','Kverneland','Landsberg','Lech','Lemken','Lilla','Mandam','Maschio','Mass','Niemeyer','Ortolan','Ovlac','Ozdoken','Ozduman','Papadopoulos','Pietro Moro','Quivonge','Rabe','Regent','SMS','Sfoggia','Simba','Staltech','Sukov','Sunflower','UNIA','UNLU','Vaderstad','Vogel & Noot','Wil-Rich','Zamidis','Zeus','Червона Зирка','Друга марка'],
    ['Мотокултиватор','','Barbieri','Carraro','CASE IH','Deutz','Deutz-Fahr','Fendt','Ford','Goldoni','IMT','ISEKI','JCB','John Deere','Kubota','Lamborghini','Same Frutteto','Valmet','Беларус','Болгар','ВгТЗ','ВМТЗ','Кировец','МТЗ','Мургаш','Т','ЧЕТРА','ЮМЗ','Друга марка'],
    ['Мулчер','','ALP','AMAC','Amazone','Bella','Berti','CASE IH','Celli','Continental','Deutz-Fahr','Durmaz','Elite','Ersun','Falc','Gaspardo','GEO','Grimme','Highline','Howard','INO','John Deere','Keulmac','Kramer','KUHN','Maschio','Projet','Schmidt','Schulte','Stoll','Turkay','Ventura','Vogel & Noot','Zanon','Друга марка'],
    ['Плуг','','Agrolux','Akpil','Amazone','Aydin','BRIX','BVL','Biso','Bomet','Dalbo','Dowdeswell','Downhill','ERMAK','Foukas','Fraugde','Frost','Galucho','Gaspardo','Gregoire Besson','He-Va','Horsch','John Deere','Kariotakis','Kongskilde','Krause','Krone','Kuhn','Kverneland','Landoll','Landsberg','Lely','Lemken','Maschio','Mass','Nardi','Niemeyer','Ortolan','Overum','Ovlac','Papadopoulos','Pietro Moro','Potila','Rabe','Regent','Serapanis','Steeno','Sukov','Tigges','UNLU','Unia','Vogel & Noot','Друга марка'],
    ['Продълбочител','','Alvan Blanch','Amazone','ANNABURGER','BRIX','BVL','Bomet','CASE IH','Cherrington','Clemens','Downhill','ERMAK','Farmet','Foukas','Frost','Galucho','Great Plains','Gregoire','Grimme','Hatzenbichler','Horsch','IrTem','KUHN','Knoche','Krone','Kurt','Kverneland','Landsberg','Lech','Lemken','Mandam','Mass','Merlo','Niemeyer','Ovlac','Ozdoken','Ozduman','Papadopoulos','Pietro Moro','Quivonge','Rabe','Regent','Salford','SMS','Steeno','Simba','Sukov','Tecnoma','UNIA','UNLU','Vaderstad','Vogel & Noot','Zamidis','Zeus','Друга марка'],
    ['Пръскачка','','AgroTechnica','Agrolead','Agromaster','Agromehanika','Agron','Amazone','Atasa','Befco','Berthoud','Blanchard','Brandi','BZC','Caffini','Caruelle','Challenger','Cebeco','Dal Degan','Evers','FLORIDA','Gaspardo','Gregoire','Grim','Hardi','Holsan','IDROget','KUHN','Lely','Lemken','Nobili','Parlayan','Pillmet','RAU','Ricosma','Rimeco','Schouten','Taral','Tecnoma','Veenhuis','Vicon','Unia','Друга марка'],
    ['Самоходна пръскачка','','Agrifac','Amazone','Berthoud','Blanchard','Caffini','Caruelle','Challenger','Gaspardo','Gregoire','Grim','Horsch','Ibis','KUHN','Lemken','Matrot','Miller','Multiple','Sapphire','Stara','Tecnoma','Друга марка'],
    ['Сенокосачка','','Akpil','Berti','Cub Cadet','Celmak','Grasshopper','Jacobsen','John Deere','Jonsered','Krone','Honda','Hustler','Pronar','Ransomes','Reform','Simplicity','Stiga','Toro','Друга марка'],
    ['Сенообръщачка','','CASE IH','Claas','Deutz-Fahr','Elho','Fella','JF','John Deere','Hesston','Krone','KUHN','Kverneland','Lely','Massey Ferguson','New Holland','Pottinger','Stoll','Vicon','Welger','Друга марка'],
    ['Сеялка','','Accord','ALP','Agrisem','Agrodan','AgroLead','Agromaster','Altinoz','Amazone','APV','Becker','Bourgault','CASE IH','Challenger','Cramer','Crustbuster','Dalbo','Doublet-Record','Eck-sicma','ERMAK','Feraboli','Fiona','Flexi-coil','Gaspardo','Great Plains','Grimme','Gungor','Hassia','Herriau','He-va','Horsch','International','IrTem','John Deere','Juko','Junkkari','Kinze','Kleine','Kongskilde','Krause','Krone','KUHN','Kverneland','Lemken','Lehner','Lely','Ma/Ag','Marsk','Mascar','Maschio','Massey Ferguson','Matermacc','Monosem','Nardi','New Holland','Nodet','Nordsten','Ozdokan','Pneusej','Rabe','Reekie','Sfoggia','Sola','Solano','Sonmezler','Sulky','Tive','Tume','Vaderstad','Vogel & Noot','White','Друга марка'],
    ['Специализирани машини','','Машини за дърводобив','Машини за лозя/овошки','Машини за зеленчуци','Напоителни системи','Разсадопосадъчни машини','Семечистачна машина','Сушилня','Други'],
    ['Телескопичен товарач','','Atlas','Ausa','Bobcat','Weidemann','CASE IH','Caterpillar','Claas','Deutz-Fahr','Dieci','Faresin','Fiat','Gehl','Genie','Giant','Gradall','Grove','Haulotte','Hydrac','Italmacchine','JCB','JLG','John Deere','Komatsu','Kramer','LULL','Manitou','Massey Ferguson','Matbro','Merlo','Mitsubishi','Multione','New Holland','Sambron','Sanderson','Sennebogen','Shaffer Lader','SkyTrak','Terex','Weidemann','Друга марка'],
    ['Торачка','','Accord','Agrex','Agromehanika','Amazone','Biso','Bogballe','Cavallo','Cosmo','Donder','Duke','Faza','Gaspardo','IrTem','Kuhn','Kverneland','Lemken','Rauch','Sola','Sulky','Unia','Друга марка'],
    ['Трактор','','Agco','AGT','Antonio Carraro','Armatrac','Atlas','BCS','Barbieri','Bobcat','Buhler','Carraro','CASE IH','Caterpillar','Challenger','Chery','Claas','David Brown','Deutz','Deutz-Fahr','Dieci','Dong Feng','Eurotrac','Faresin','Farmtrac','Fendt','Ferguson','Ferrari','Fiat','Ford','Fordson','Fortschritt','Foton','Giant','Goldoni','Hanomag','Hattat','Heibei','Hinomoto','Holder','Honda','Hurlimann','IMT','International','ISEKI','JCB','Jinma','John Deere','Kioti','Kubota','LS','Lamborghini','Landini','Leyland','Limb','Lindner','Manitou','Mahindra','Massey','Matbro','MB Trac','McCormick','Merlo','Mitsubishi','New Holland','Oliver','Orion','Pronar','Renault','Same Frutteto','Shaffer Lader','Shibaura','Steiger','Steyr','Tumosan','TYM','Ursus','Valtra','Valmet','Versatile','Volvo BM','Xingtai','Yanmar','YTO','Zetor','Беларус','Болгар','ВгТЗ','ВМТЗ','Владимировец','Кировец','ЛТЗ','МТЗ','Мургаш','Т','ХТЗ','ЧЕТРА','ЮМЗ','Друга марка'],
    ['Фреза','','Agri World','Amazone','Berti','BRIX','BVL','Bomet','Celli','Downhill','ERMAK','Farmet','Foukas','Frost','Galucho','Great Plains','Hatzenbichler','Horsch','IrTem','KUHN','Knoche','Krone','Kurt','Kverneland','Landsberg','Lech','Lemken','Mandam','Mass','Niemeyer','ORTIFLOR','Ovlac','Ozdoken','Ozduman','Papadopoulos','Pietro Moro','Rabe','Regent','SMS','Simba','Sukov','Tortella','UNIA','UNLU','Vaderstad','Vogel & Noot','Zamidis','Zeus','Червона Зирка','Друга марка'],
    ['Хедер','','Akturk','Biso','Capello','Case','Claas','Dominoni','Fantini','Fortshritt','Geringhoff','John Deere','Massey Ferguson','Nardi','New Holland','Olimac','Oros','Stark','Zaffrani','Металагро','Метарем','Нива','Други'],
    ['Чизел','','Amazone','BRIX','BVL','Bomet','Downhill','ERMAK','Farmet','Foukas','Frost','Galucho','Great Plains','Horsch','IrTem','KUHN','Knoche','Krone','Kurt','Kverneland','Landsberg','Lech','Lemken','Mandam','Malerdos','Mass','Niemeyer','Ovlac','Ozdoken','Ozduman','Papadopoulos','Pietro Moro','Rabe','Regent','SMS','Simba','Sukov','UNIA','UNLU','Vaderstad','Vogel & Noot','Zamidis','Zeus','Друга марка']
  ],
  [
    ['Автовишка','','Bizzocchi','Mercedes-Benz','Manitou','Grove','Iveco','Palazzani','Ruthmann','Versalift','Друга марка'],
    ['Автокран','','Mercedes-Benz','Volvo','Друга марка'],
    ['Асфалтополагаща машина','','Ammann','BOMAG','Cat','Dynapac','Sany','Volvo','Друга марка'],
    ['Багер','','ABG','Ahlmann','Akerman','Ammann','Atlas','Bobcat','Case','Case/Poclain','Cat','Caterpillar','Cukurova','Daewoo','Demag','Deutz/Poclain','EO','Faun','Fermec','Fiat','FIAT Hitachi','Fuchs','Furukawa','Gehl','Gehlmax','Hamm','Hanix','Hanomag','Hidromek','Hinowa','Hitachi','Hydrema','Hyundai','JCB','K','Kobelco','Komatsu','Kramer','Kubota','LG','Libra Cams','Liebherr','LiuGong','Michigan','Multicar','Nante','Neuson','New Holland','Nobas','O&K','Orthaus','Palfinger','Pel-Job','Renault','Sany','Scania','Schaeff','Sennebogen','Shatal','Skoda','Solmec','Takeuchi','Terberg','Terex','Unimog','Volvo','Wacker','Warynski','Weber','Wirtgen','Yamaguchi','Yanmar','Zeppelin','Zetor','Zettelmeyer','БХ','ЛАЗ','ЮМЗ','Друга марка'],
    ['Бетон миксер','','Avia','Barkas','Bmc','Citroen','Daewoo','Daf','Daimler','Dodge','Eagle','Erf','Fabela','Faun','Fedra','Fiat','Foden','Ford','Gaz','Gazela','Ginaf','Hanomag','Henshel','Hino','Hyundai','Ielch','Ifa','Ikarus','Inter','International','Isuzu','Iveco','Jum','Jumbo','Kamaz','Kia','Kraz','Latvia','Leiland','Liaz','Lt','Luaz','Mack','Madara','Magerus','Man','Man-vw','Maz','Mazda','Mercedes','Mini','Mitsubishi','Nisa','Nissan','Nova','Om','Opel','Peugeot','Praga','Preslav','Raba','Renault','Robur','Roman','Rover','Scania','Seat','Seres','Sermac','Setra','Shtaer','Skoda','Staer','Steyr','Super','Tatra','Terberg','Toyota','Trail','Uaz','Ural','Vanhool','Volvo','Vw','Yamo','Zil','Камаz','Друга марка'],
    ['Бетон помпа','','DAF','Volvo','Mercedes-Benz','Iveco','Sany','Scania','Sermac','Друга марка'],
    ['Булдозер','','Atlas Copco','Bibko','Cat','DAF','Dynapac','Elba','Ford','Freightliner ','Haulotte','Hidromek','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Валяк','','Ammann','BOMAG','Cat','Dynapac','Hamm','Ramax','Ozender','ВГ','ХВТПГ','Palme','LG','Sany','ShanTui','Volvo','Друга марка'],
    ['Грейдери','','Atlas Copco','Bibko','Cat','DAF','Dynapac','Elba','Ford','Freightliner ','Haulotte','Hidromek','Intermix','International','Iveco','JCB','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Допълнително оборудване','','Електроагрегат','Електрожен','Канго','Компресор','Фреза за асфалт','Хидравличен чук','Друг вид'],
    ['Други специализирани машини','','Ammann','Atlas Copco','Bibko','DAF','Dynapac','Elba','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','JCB','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Каналокопатели','','Atlas Copco','Bibko','Cat','DAF','Dynapac','Elba','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','JCB','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Компресори','','DAF','Atlas Copco','Bibko','Dynapac','Elba','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Кулокранове','','DAF','Arcomet','Atlas Copco','Bibko','Dynapac','Elba','FMGru','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Liebherr','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Potain','Raimondi','Renault','Saez','San Marco','Scania','Tatra','Terex Comedil','Terex Peiner','Turbosol','Unimog','Volvo','Zeppelin','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Машини за асфалт','','DAF','Atlas Copco','Bibko','BOMAG','Dynapac','Elba','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Машини за насипни материали','','DAF','Atlas Copco','Bibko','Dynapac','Elba','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Мини челни товарачи','','Atlas Copco','Bibko','Bobcat','Cat','DAF','Dynapac','Elba','Ford','Freightliner ','GEHL','Haulotte','Intermix','International','Iveco','JCB','Kenworth ','Komatsu','Kubota','LiuGong','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Минна техника','','DAF','Atlas Copco','Bibko','Dynapac','Elba','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Платформи','','DAF','Atlas Copco','Bibko','Dynapac','Elba','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Телескопични товарачи','','Atlas Copco','Bibko','Cat','Caterpillar','DAF','Dynapac','Elba','Ford','Freightliner ','John Deere','Haulotte','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Mack','MAN','Manitou','Mercedes Benz','Merlo','Metso','Peterbilt','Renault','Saez','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Трамбовки','','DAF','Atlas Copco','Bibko','BOMAG','Dynapac','Elba','Ford','Freightliner ','Haulotte','Intermix','International','Iveco','Kenworth ','Komatsu','Kubota','Mack','MAN','Mercedes Benz','Metso','Peterbilt','Renault','Scania','Tatra','Turbosol','Unimog','Volvo','ЗИЛ','КАМАЗ','МАЗ ','Друга'],
    ['Челен товарач','','Cat','Caterpillar','Gehl','Hanomag','Hyundai','JCB','John Deere','Komatsu','Libra Cams','Liebherr','LiuGong','Manitou','Multione','Padagas','SEM','Stoll','Schaeff','Volvo','Друга марка']
  ],
  [
    ['Електрокар','','Artison','Baumann','Bobcat','BT','В&Р','Cat','Clark','Combilift','Crown','Daewoo','Hyster','Irion','Jungheinrich','Kalmar','Komatsu','Lansing','Linde','Manitou','Michigan','Mitsubishi','Nissan','O&K','Sambron','Steinbock','Still','TCM','Toyota','Unimog','Yale','В&Р','Други'],
    ['Мотокар','','Artison','Baumann','Bobcat','BT','В&Р','Cat','Clark','Combilift','Crown','Daewoo','Hangcha','Hyster','Irion','Jungheinrich','Kalmar','Komatsu ','Lansing','Linde','LiuGong','Manitou','Michigan','Mitsubishi','Nissan','O&K','Sambron','Steinbock','Still','TCM','Toyota','Unimog','Yale','Други']
  ],
  [
    ['Каравана','','Adria','Ahorn','Alpha','Alpine','Arca','Autoroller','Autostar','Avento','Award','Bavaria-Camp','Bawemo','Benimar','Beyerland','Bimobil','Burow','Bursner','Burstner','Carado','Caretta','CA-MO-CAR','CI International','CS Reisemobile','Caravelair','Caro','Carthago','Challenger','Chateau','Chausson','Coachmen','Concorde','Cristall','Daystar','Dehler','Dethleffs','Due Erre','EVM','Eifelland','Elnagh','Eriba','Esterel','Euramobil','Euro Liner','FFB - Tabbert','FR-Mobil','Fendt','Fiat','Fleetwood','Frankia','Granduca','Hehn','Heku','Hobby','Holiday Rambler','Hymer','JOINT','Karmann','KIP','Knaus','LMC','La Strada','Laika','M+M Mobile','McLouis','Mirage','Mobilvetta','Monaco','Moncayo','Niesmann+Bischoff','Nordstar','Ormocar','Phoenix','Pilote','Possl','RMB','Rapido','Reimo','Reisemobile Beier','Rimor','Riva','Riviera','Roadtrek','Robel-Mobil','Rockwood','SLOOP','SUNLIGHT','Sea','Selbstbau','Shato','Solifer','Sprite','Sterckeman','TEC','Tabbert','Tischer','Triple E','Vario','Vitesse','Weinsberg','Weippert','Westfalia','Wilk','Winnebago','Woelcke','Други'],
    ['Кемпер','','Adria','Ahorn','Alpha','Arca','Autoroller','Autostar','Bavaria-Camp','Bawemo','Benimar','Bimobil','Burow','Burstner','Carado','CA-MO-CAR','CI International','CS Reisemobile','Caravelair','Caro','Carthago','Challenger','Chausson','Chrysler','Coachmen','Concorde','Cristall','Dehler','Dethleffs','Due Erre','EVM','Eifelland','Elnagh','Eriba','Esterel','Euramobil','Euro Liner','FFB - Tabbert','FR-Mobil','Fendt','Fiat','Fleetwood','Ford','Ford / Reimo','Frankia','General Motors','GlobeCar','Granduca','Hehn','Heku','Hobby','Holiday Rambler','Hymer','JOINT','Karmann','Knaus','LMC','La Strada','Laika','M+M Mobile','Mazda','McLouis','Mercedes-Benz','Miller','Mirage','Mitsubishi','Mobilvetta','Monaco','Moncayo','Niesmann+Bischoff','Nordstar','Ormocar','Peugeot','Phoenix','Pilote','Possl','RMB','Rapido','Reimo','Reisemobile Beier','Renault','Rimor','Riva','Riviera','Roadtrek','Robel-Mobil','Rockwood','ROLLER TEAM','SLOOP','SUNLIGHT','Sea','Selbstbau','Sterckeman','TEC','Tabbert','Tischer','Triple E','VW','Vario','Weinsberg','Weippert','Westfalia','Wilk','Winnebago','Woelcke','Други']
  ],
  [
    ['Ветроходна лодка','','Abeking & Rasmussen','Abma\'s Jachtwerf','ACM Dufour','Acva-Bat','Albatros','Albers','Albica','Albin Marin','Alden','Allegro','Alubat','Aluminium Schiffswert','Amel','Amerglass','Amigo','Ancasta','Apache','Aphrodite','Aprem','Aquamarin','Aquileia','Archambault','Argo','Arminski','Artekno','Artmare','Artom','As-Yachten','Askeladden','Asmus','Ass','Astilleros Med.','Atlanta','Atlanta Boot','Avance','Avar','Azur','Baars-Lindner & Renkhoff','Baess','Baker','Baltec Engineering','Baltic','Baltika','Bandholm','Banner','Barakuda','Barberis','Bashford','Bateaux Helium','Bateaux Neptune','Bavaria','Baia','Baja','Bayards','BB Yacht','Beck & Sцhne','Beckerbat','Belliure','Beneteau','Benford','Bianca','Bicker','Birenheide','BK Marin','Blank','BlizzardBlondecell','Boat Sales','Bodan','Bodo Gьnther','BoehlingBoerresen','Bon Yachts','Boo Marin','Bootsbau Rьgen','Bootsservice Seebruck','Bosgraaf','Botnia Marin','Boutemy','Bowman','Bowman Yachts','Briand','Briecraft','Broekmeulen','Brofjordens','Bruun','BTM Marin','Bubel','Buchwald','Bucklers Hand','BWC','Bдrjesson','Bцbswerft','Bцrresen','C & C Yachts','C.N.S.O.','C.S.P.','Camenga','Camper & Nicholsons','Cancrinus','Cantiere del Pardo','Capelli','Caravelle','Carter Offshore','Cascaruda','Cascom','Cat Ketch','Catalina','Catana','CB-Yachts','Celestial','Cheoy Lee','CIM Shipyard','Classic','Classis','CNA','Coast Catamarane','Codelco','Colin Archer','Colina','Columbie','Colvic','Comar','Comfort Yachts','Compromis','Conaver','Conavroegh','Concept Int.','Conseuro','Contessa','Contest','Contrast','Conyplex','CoopmannCopper','Cornish Crabbers','Coronet','Corsair','Countess','Couach','CR Yachts','Cramar','Crestitial','Cross','Cross-Yachts','Crownline','Crowser','Cumulant','Danboat','Danish Yacht','Dantec','Darragh Boats','Dart','DAS','db Yachtbau','de Boarnstream','de Gier & Bezaan','de Kloet','de Merenpoort','de Ruiter','de WielDeerbergDegeroe','Dehler','DekkerDel Basso Creation','Delphia','Deters','Deutscher Werftbau','Dick Ruis','Doering','DongemontDown East','Drabant','Dresport','Dromor','DRP','Dudley Dix','Duebbel + Jesse','Dufour','Dutch East Indies','Dynamique','Dynasty','e+a Yachts','Edel','Edel-Yachten','EigenbauEikboom','Elan','Electra Marine','ElfmeerenElite Yachting','Elliott','Enterprise Marine','Esslinger & Abt','Etap','Eurojacht','Excel','Expandor','F&C Frers & Cibils','Fabola','Faenoe','Falke','Fallesen','Familjebatar','Fan','Farner & Stierlin','Faurby','Feltz','Fiberglas Technik','Fibocon','Fidego','Figareau','Finmar','Finngulf','Fiskars','Fjord Plast','Flying Dutchman','Folkebad','Force Engineering','Forgus','Format System','Formosa','Fountaine Pajot','Framboat','Franchini','Frauscher','Freedom','Fricke & Dannhus','Friendship','Friesland BoatingFuria','Fдrdewerft','G-Cat International','Gade','Galeon','Gallart','GalterbloomGeldermalsenvletGenius','German FrersGerman Globe','Gesten Glasfiber','GeuzenBoats','Gibert Marine','GILES','Gillhaus + Schmidt','GillissenvletGiorgetti & Magrini','Glacer','Glas','Glen-L','Goebel/Hess/Carat','Golden Hind Marine','Gorbon Yachts','Gougeon','Gouwerek','Grainger','Granada','Gruben','Hallberg-Rassy','Hans Christian','Hansanautik','Hanse','Hardy','Harlinger Jachtbouw','Hatecke','HD Yachtbau','Heinrich','Helleman','Hellmich','Helmsmann','Henningsen & Steckmest','Hensgen','Henze','HerisoeHirsch','HJB Cumulant','Hobie Cat','Hohmann','Holland Boat','HolzbootHonnor Marine','HR','Huber','Huisman','Huneke Yachtbau','Hunter','Hunter Boats','Hurley Marine','Husumer Schiffswerft','Hдfele','Impact Yachts','Impala','International One Design','Interyacht','Irwin','Island Packet','Islands Plasctics','IW-Varvet','J Boats','Jacobssons','Jaguar','Jantar','Jeanneau','Jeantot','Jongert','Jonmerie','JS Denmark','Judel & Vrolijk','Jullien','Junker','Jupiter','Jutahela','Jдger','Kaarina','Kalik/Lewin','Kelsall','Kelt','Kennex','Kim','Kim Boote','Kinetik','Kirie','Kittiwake','KKG','KL-Race\'n Sail','KlassenbooteKlein','Knief','KolakowskaKolumbusKorpalKuijper','Kunya-Werft','Kьnemund','Lack Catamarans','Lagoon','Lamberti','LanaverreLandolt','Langedrag','Langц','Larsen','Larsmo Marin','Lauwersmeer','Lax','LDC','Le Guen + Hemidy','Leda Yachtbau','Leisure','Lerouge','Licospars','LidingoeLiekmeier','Limimetalli','LinCENIT','Lindstrцm','Linex','Lipro','Lito Marin','LM Boats','Luffe','Luft','LYC','Lьtje','MacGregor','Macwester','Mader','Maestro','MajesticMallard','Malц Yachts','Mamba','Marieholms','Marin Form','Marin Park','Marina-Werft','Marine Projects','Mariver','Marlin','Mascot Boats','Matthiessen & Paulsen','Mattia & Cecco','Maurus','Maxi/Petterson','Maxim Marine','Mayfly','McNulty','Medora','Meerenport','Meier','Meister-Bootsbau','Meta','Metal Service','Meyba','MFGMichel JoubertMicro','Miglitsch','Millennium YachtsMod Marine','Moedt','Montisola','Moody','Moomba','Morebas','Morgan','Moser','Motiva','MRCB','MucheMulder & Rijke','MultimareMultimodal','Mystere','Mцn','Naboats','Najad','Nao-Glass','Nautic','Nautic Boercherts','Nautic Plast','Nauticat','Nautivela','Nautor\'s Swan','Naval Force 3','Navoc','Negri Nautica','Neptun','Neptune BateauxNeptunus','New Marine','Newbridge Boats','Nicholls','Nillings','Nimbus','Noord Nederland','Nordborg','Nordia','Nordica Yacht','Nordrhein','Nordship','Norfolk Boatyard','North Neach Yachts','North Wind','North Wind/Spitzner','Northshore Yachts','Noveli','Nxkra','Nytec','O.L.-Boats','Oehlmann','Oeja Werft','Oesterr. Schiffswerft','Ohlson','Ola','Olsen','Olympic','Olympus','Omega','Opus / Pedersen & Thuesen','Ormiиres','OSM Boat','Ostroda','Outborn','Outremer','Ovington Boats','OvniOyster Marine','P-P Marine','Pannenbдcker','Panther Craft','Parker','Passat','Pearson','Pegaz','Peiso','Pendennis Shipyard','Perfekt Yacht','Performance Catamarans','Performance Sailcraft','Pershing','Peryl','Petterson','Piewiet','PiranhaPlasto','Polyboats','Porali Marin','Porter & Haylett','Poucher Boote','Pouvreau','Premier','Primaboot','Prior','Projection Yachts','Prout','PuffinQuorning','Raa / Lyneas','Raga','Rajo','Rano Marin','Rassmussen','Rebell Werft','Ree Marine','Regina af Vindц','Reid','Reinicke','Reinke','Rest Nautic','Rethana','Rex Marin','RFK-Bootsbau','Rhapsody','Rival Yachts','Roberts','Rock','Roga','RommelRonautica Yachts','Rubin Yachtbau','Ruiter','Rus','Rydgeway','Sabre','Sadler','Saga Boats','Sailart','Samba','Sangermani','Satos','Scanyacht','Schlichting','Schmidt','Schroeder Werftbau','Schweizer BateauxSchцchl','Seafarer','Searfinn','Searif','SeebruckSegger','Senkoh TH)Shipman','Shipyard Maritim','Siddhartha Sailing','Sigma Yachts','Siltala','Simonis Red MaxSirena-Yachts','Sirena-Yachts','Sirius','Skipper','Slepsk','Small Craft','Smoegenbatar','Soerland','SONSTIGE/Southern Wind ShipyardSparr','Spiro Ships','Spitzner','Splash','Sport Lake','Sprenger','St. JozefvletStaackwerft','StalenStarboard','Steding','Stern-Werft','Stichnoth','Storebro','Sun Yachting','Sunreef Yachts','Sunwind','Swede Hergla Yachts','Sweden Yachts','Syd','Ta Chiao','Ta Shing','Ta Yang','Ta Yang','Taasinge Glasfiber','Tabasco Marin','Targa','Taswell','Tekno-Marine','Tenten-Boats','Thames Marine','Thuro-Plast','Thyssen Nordseewerke','TIGA','Time-Out','TirenaTop Cat','TPI','Trapper','Triangle','Tribell','Trident Marine','Trimax','Trintella','Triobatar','Tuco','TvedestrandUecker','V SprintValentijn & Zonen','van Dam Nordia','van der Stadt','van der Vlis','Van Hagen','van Heygen','VariantaVeen Scheepsbouw','Veleiro','Velmare','Vennekens','Vermaas','VICEM','Victoire','Victoria','Vindц','Visentini','Visie Jachtwerf','Volharding','von Ahlen','Voss','Waarschip','Wally Yachts','Wasa Marin','Wauquiez','Weatherly Marine','Wefers','Wegu','Weikert','Well Design','Westerly','Westfield','Wever','Wharram','Wi Pro','Wibo van Wijk','Wiegleb & Scharf','Wieker Boote','Wijk en Zoon','Winga Boats','Winner','WirthWitec MarineWoods','Wright','Wrighton','X-Yachts','Xylon','Y.B.M.','Yacht Berlin','Yacht Concept Solartechnik','Yacht Visionen','Yacht-Service Jenneskens','Yachting France','Yachtwerft Berlin','Yachtzentrum Greifswald','YBG Yacht','YEZ Potsdam','Young Sun','YWRC','Zaadnoordijk','ZARZeta Group','Ziegelmayer','Zuiderzee','Собствено производство'],
    ['Джет','','Bombardier Sea Doo','Honda','Kawasaki','Polaris','Suzuki','Tigershark','Yamaha','Aquatic Scooters','Williams','Yongwang','Други'],
    ['Извънбордов двигател','','Evinrude','Honda','Johnson','Mercruiser','Mercury','Nissan','Scrap','Suzuki','Yamaha','Вихр','Ветерок','Други'],
    ['Лодка','','Acquaviva','Admirality Shipyards','Albica','Ally','Aprem','Artom','Askeladden','Asso','Astilleros Menorca','Baltic','Bartex','Barum','Bavaria','Bayliner','Bombard','Bombardier Sea Doo','Boote','Bic','Birennheide','Blum','Boston Wahler','Boutemy','Broekmeulen','BTM Marin','Bucher','BWC','Bцrresens','Challenger','CNA','Coleman','Cornish Crabbers','Corsiva','Cover','CraigCat','Cremo','Dagger','Dehler','Dell Quay','Doering','DRP','Duarry','Dyno Plast','Eskimo','Eurolaunch','Expandor','Feathercraft','Fiberglas Technik','Fiskars','Fricke & Dannhus','Gade','Gatz','Germania Boot','Gio\'Mare','Gobbi','Grabner','Gruben','Gugelwerke','Hammermeister','Hansa-Nautic','HAWA','Hille','Hobie Cat','Huber','huber r+p','Hudek','Hдfele','Indian Canoe','Josef Reich','Jumbo-Boote','Juncker','Junglas','Kawasaki','Kittiwake','KL-Race\'n Sail','Klepper','Kraller','Kruger','Kruger Boatbuilding','Lamberti','LDC','Leda Yachtbau','Lettmann','Linder','Lindinger','Mad River','Majoni','Marine Equipment','Mariposa','Maritime Technik','Martini','Master','Mayland','McNulty','Mingolla','MM Boote','Montisola','Moser','Necky','New Marine','Norfolk Boatyard','Nova Craft','Novamarine','Novoplast','Oernvik','Old Town','Orkney','OSM Boat','Ostroda Yacht','Ovington Boats','Paddel-Meier','Pelican','Perception','Performance Sailcraft','Pioner','Poseidon','Porta-Boote','Poucher Boote','Prijon','Primaboot','Pyranha','Quicksilver','Rainbow','Ramco Boats','Ranieri','Rio','Roby','Rudkцbing','Ryds','Saare-Paat','Sagert Bootswerft','Sailart','Schlichting','Schulz','Segger-Boote','Shetland','Silver','SONSTIGE/Splash','Starcraft','Sugar Sand','Tenten-Boats','Terhi','Thomas','Thuro-Plast','Topper Intern.','Tribell','Trinity Bay','Vega','Virus','Wavecrest','Wieker','Wilderness Systems','Tohamaran','Wooden Technologie','Yamaha','Yamarin','Zaadnoordijk','Собствено производство'],
    ['Моторна яхта','','Abacus','Abbate, Bruno','Abbate, Tullio','Absolute','ACM Dufour','Acquaviva','Adec','Adler Storebro','Admiral','Admirality Shipyards','Adria Event','Agder','Agronaut','Aicon','Airfoil','Albemarle','Albica','Albin','Albin Marine','Alden','Alfamarine','Ali Craft','Allermцhe Bootswerft','Allround','Almarine','Alpha Marine','Alphacraft','Alstom','Altena','Aluminium Schiffswerft','Amerglass','American Marine','Ancora','Angel Marine','Antago','Aprea Mare','Aprem','Aqua Star','Aquador','Aquamar','Aquamarine Yachts','Aquanaut','Aquatron','Aquaviva','Aquileia','Arcoa','Aronow','Arredomar','Arriva','Arvor','Askeladden','Assos','Astilleros Med.','Astilleros Menorca','Astinor','Astondoa','Astor','Astromar','Atlantic','Atlantic','Atlantis','Azimut','Baensch','Baess','Baia','Baja','Bakker','Baltic Products','Barakuda','Barro','Bartex','Bateaux Ocqueteau','Bavaria','Bayliner','Bayside','Beekmann','Beelitz','Bekro','Bella','Beluga','Benecci','Beneteau','Benetti','Bertram','Besmer','Best','Bialystok Sport Yacht','Biam','Birchwood','Birenheide','Blauwe Hand','Blohm + Voss','Blum','Boatbuilding','Boesch','Bombardier Sea Doo','Bonum','Boote-Korpal','Bootswerft Bad Zwischenahn','Bootswerft Bucher','Bossem\'s','Boston Whaler','Botec','Botnia Marin','Brandsma','Brekken Kruiser','Broekmeulen','Brooke','Broom','Broward','Bruijs Jachtbouw','Bryant Boats','Bucher','Buetzfleth','Bugari','Burger','Buster','C-marine','C.N.A.','C.R.N.','Cabo','Cadorette/Thundercraft','Campion','Can. del Canale','Canados','Canaventura','Cant. Capelli','Cant. di Baia','Cant. di Sarnico','Cantieri Navali','Capelli','Carat','Caravelle','Carnevali','Carolina Skiff','Carver','Cascaruda','Catana','Celebrity','Century','Challenger','Chaparral','Chauson','Chavanne','Check Marine','Checkmate','Cheer Men Marine','Cheoy Lee','Chris Craft','Cigala & Bertini','Cigarette','Citation','Clark','Cobalt','Cobia','Cobrey Boats','Codecasa','Colombo','Colvic','Comar','Comarine Int.','Comet-Plast','Comtec','Conam','Conavroegh','Condor Yachting','Conquest','Consonant','Cornish Couach','Couach','Crabbers','Coronet','Correct Craft','Costa Blanca','Cougar','Cover','Coverline','CraigCat','Cranchi','Cremo','Crestar','Crestliner','Crisline','Crownline','Crowther','Cruisers','Cutter','Cytra','Dacapo','Dalla Pieta','DANA Performance Boats','Darragh Boast','de Alm','De Boarnstream','De Breedendam','De Drait','De Gier','De Groot','De Ruiter','De Vries','Dell Adriatico','Dell Quay','Diana','Doering','Donzi','Doral','Doriff','Dory','Dory Wahoo','Draco','Drago Boats','Duarry','Duus Trading','Dyna','Dynasty','Dyno Plast','Ebbtide','Ecofiber','Edership','Eider','Eista','Elan','Elegance','Eliminator','Elite Craft','EMP','Enterprise Marine','Essex','Etap','Euro Star','EurocrownEurolaunch','EverSail','Evon','Excel','Explorer','Faeton','Fairline','Falcon','FBB','Feltz','Fenix','Ferretti','Fevik','Fiart Mare','FiberformFiberline','Fidego','Fiesta Marine','Finmar','Finn-Marin','Fipa Italiana','Fiskars','Fisker ZeevaerFjord','Fleming','Fletcher','Flipper','FM','Forbinabatar','Forester','Formula','Formula Boats','Fountain','Four Winns','Fr. Schweers','Freedom','Freeman','Friesland Boat','Fuerstenberg','Funboats','Galaxy','Galeon','Galeon Boats','Gallart','Gancza','Garin','Gekko Sports','Genesis','Gianetti','Gibert Marine','Gio Mare','Giorgetti & Magrini','Giugliano','Glacer','Glassmaster','Glassport','Glasstream','Glastron','Glastron Laraya','Glen-L','Global','Gobbi','GoereeGorbon Yachts','Grainger','Grand Banks','Grew','Gruno','Gulf Craft','Guy Couach','Haines Marine','Halvorsen Marine','Hammermeister','Hampton','Hansa-Nautik','Hardy Marine','Harris Flote Bote','Hatteras','Heesen Shipyards','Heistracher','Hellas','Hellwig','Heyland','HI-Star','High Tech','Hille','Hiltergerke','Hochmuth','Hock','Holiday Boating','Holiday Mansion','Holland Boat','Hollandia','Hoogezand','HorizonHuber','Huisman','Hunton','Huseklepp','Hydrolift','Ilver','IMP Boats','Innovazione&amp;Progetti','Inter','Intermare','Invader','Island Gypsy','Italcraft','Italmotomare','Jacobssons','Jade Banks','Jans','JCL Marine','Jeanneau','Jensch','Jet Craft','Joda','Jofa / Triss','Juncker','Junglas','Kammin','Karnic','Katana','Kelt','Kinetik','KKG','KMV','Knief','Kong &amp; Halversson','KoopmansKorhonen','Kral','Kraller','Kraps','Kroen','Kroon','Kuhnle Werft','Kunya-Werft','Lagoon','Lamberti','Lami','Laroc','Larson','Lauwersmeer','Leda Yachtbau','Leeraner Yachtwerft','Legend Boats','Lehmann + Yachten','Lema','Linden','Linder','Lindinger','Lindstroems','Linetti','Linex','Linssen','Luerssen','LYC','MacGregor','Mainship','Majorca Nautica','Makma','Malard','Malibu','Mano Marine','Marada','Marco-Plast','Mares','Marex','Mariah Boats','Maril','Marina Lanke','Marinco','Marine Projects','Marine System','Marinello','Mariner','Marino Oy','Mark Twain','Marquis','Marubeni','Mas','Master','Master Craft','Maverick','Mawelo','Maxum','Mayland','MCP Kelt','Mekon','Menorquin Yachts','Merenpoort','Meta','MG boats','MiamiMignola','Mingolla','Mirage','Mittelmann\'s','MM Boote','Mochi Craft','Moewe Yachtbau','Mogano LaunghMoland','Molinari','Monte Fino','Monterey','Moomba','Moonen Shipyards','Mossig','Mostes','Motiva','Mountain Yachts','Mulder','Myra','Mшn','Nauticat','Nautirama','Navcon','Naviga','NB Marine','Neptunus','Nexus','Nichols','Nicke Petter','Nicolini','Nidelv','Nimbus','Nor Star','Nor-Dan','Nord West','Nordia Yachts','Nordic','Nordic','Nordisk','Norman','Norman','NorTech','Novoplast','Nowee Heeg','Nuova Inter Are','Nya Oskarshamm ShipyardO.M.J.','Ocean Alexander','Ocean Cruise','Ocean Yachts','Oceano Sportivo','Ockelbo','Ocqueteau','Octagon','Oehlmann','Oernvik','Off-Course','Olympia','Olympic','ONJ','Oost Jachtwerf','Orkney','Ormiиres','OSM Boat','Ostroda','Otto Boats','Outhill','Pacific AllurePalmer Johnson','Pearl','Pedrazzini','Pedro','Peiso','Pelican','Pelle Peterson','Pendennis Shipyard','Perfekt Yacht','Performance','Pershing','Pfeil','Phoenix','Phuket Yachts','Picchiotti','Picton','Piet Hein','Pikmeerkruiser','PilotPioner','Polar Boats','Polaris','Polyboats','Porsche Marine','Portofino Marine','Poseidon','Posillipo','Power Play','President','Prima Yachts','Primaboot','Princess','Privateer','Proficiat','Prout','Pдijдn','Qualine','Quicksilver','Raffaeli','Ramco Boats','Ramin Boats','RanaRanieri','Rancraft','Rapsody','Rascala','Recla','Red Hawk','Regal','Reinell','Reinke','Relcraft','ReLine','Renken','Revenger','Riamar','Rias','Ridas','Rinker','Rio','Riva','Rizzardi','Roberts','Rocca','Rocco Boats','Rodman','Roland','Romar','RoskamRoyal Denship','Rudkцbing','Ryds','Saare-Paat','Sabre','ASafir','Saga','Sailart','Salpa','San Boat','San Lorenzo','Sandviks','Sarins','Sasanka','SBPEM','Scand Boats','Schachner','Scharping','Schleswiger Werkstдtten','Schlichting','Schulz','Schweizer Bateaux','Sciallino','Sea Fox','Sea Nymph','Sea Ray','Sea Sprite','Seabird','Seaco','Seaforce','Sealine','Seaswirl','Seawing','Seedoo','Segger-Boote','Selva','Sessa','ShadowShakespeare','Shamrock','Shetland','Siemer','Silver','Silverline','Silverton','Skagerrak','Skarpnes','Skibsplast','Skilsц','Skorgenes','Slickcraft','SM Yacht Werft','Smelne','SNP','SoleMar','Sollux','SONSTIGE/Southern Wind','SpectrumSpeedy','Spirit','Sport CraftStar Yachts','Starcraft','Ste Mar Nautica','Stefyniur','Stelco','Stentor','Steven','Stichnoth','Stingray','Storebro','Struerewerft','Sturier TrawlerSuccess','Sun Cruiser','Sunbird','SunlinerSunmar','SunraySunreef Yachts','SunRunner','Sunseeker','Supra Sports','Swift Craft','Symbol','Syntechnics','T.A. Mare','t.a.mare','Ta Chiao','Tacoma','Talon','Tania','TargetTarquin','Tashing','Taurus','Tayana','Techno Consult','Tecnofiber','Tecnomarine','TEKA','TempestTenten-Boats','Terhi','TexasTG Boat','Thermo','Thoma','Thompson','Thunderbird','Thundercraft','Time-Out','Tjeukemer','Tollycraft','Toni Giugliano','TornadoTrailer','Transpacific','Tresfjord','Tristan Boats','TriStar','TroianTrojan','Tullio Abbate','Tung Hwa','Uniesse Marine','Unique','Uttern','v-type','Vacance','van der Heijden','van der Valk','van der Vlis','van der Werff','van Lent','van Vlieth','van Waarde','van Wijk','Vansjo-Bat','VDL Shipyards','Vega','Veha','Veneveistдmo','Versil Craft','Viber','VICEM','Vieser','Viking','Viking','Viknes','Viksund','Vip Boats','Virgin del Mar','Vissers','Volharding','Voss','Vri-Jon','Vribuiter','Vripack Yachting','Vroegh &amp; Alblas','Vulture Ventura','Warlock','Waswa','Waterland','WeCo','Wellcraft','Westerly','Weston','White SharkWicabo','Wieker','Wiking Boats','Willigen','Windy','Winga','Winrace','Winsor Brothers','Wyboats','Xylon','Y.B.M.','Y.E.P.','Yachtwerft Wilhelmshaven','Yamaha','Yamarin','Yaretti','Z-ProductsZaniboni','Zeta Group','Zijlmans','Собствено производство'],
    ['Надуваема лодка','','A.G.A. Marine','Achilles','Airstrong','Allroundmarin','Angeviniиre','Arimar','Asil Marine','Avon','Bat','Bayside','Bestway','Bolero','Bombard','Brig','BUSH','Calligari','Cant. Capelli','Compass','Delphin','Dromor','DSB','Duarry','E-Sea','Eurovinil','Feldkamp','Fiord','Flyer','Frais','Gomme Jeantot','Gommonautica','Grabner','GRAND','Gugelwerke','Haekang','Hansa-Nautik','Hellas','Hobie Cat','Honda Marine','Hutchinson','Infanta','Italboats','Keckeis','Line Winder','Lodestar','Lomac','MA.GA.RI.','Mago','Marineria','Marlin','Maxxon','Mercury','Metzeler','Mirage','Narwhal','Nautica Aiello','NorisboatNovamarine','Novurania','Nuova Jolly','Phoenix','Pischel','Plastimo','Poseidon','Prestige','Prestige','Quicksilver','Ranieri','Ris','Rubberduck','SACS','Schlauchbootfabrik','Selva','Sillinger','SONSTIGE/Spreu','Stinger','Sun Marine','Suzumar','Technohull','Tesimax','Ulma-Marine','v-type','Valiant','Vast Channel','Wiking','Wind','Winsor Brothers','Yam','Yamaha','Yanmar','YKL','YRT','Zander','ZAR Formenti','Zebec','Zephir DSB','Zodiac','Собствено производство']
  ],
  [
    ['За автомобил','','Agados','Agromaster','Algema','Atespar','Hofman','Humbaur','Karo','Neptun','Fit-zel','RESPO','Sommer','TPV','Thule','TrendEx','Venitrailers','Umbra rimorchi','Vaas','Дея','Зора','ТЕМА','Други'],
    ['За камион','','.','Lamberet','Neptun','Sermac','Sommer','Vaas','Дея','Други'],
    ['За трактор','','.','Bellucci&Rossini','Biso','BvL','Claas','Conow','ERMAK','Fliegl','Gnagnarela','Joskin','Neptun','Palmse','Pomod','Pottinger','Pronar','Sommer','SMS','Vaas','Дея','Други'],
    ['Полуремарке','','.','Adige','Benalu','Bodex','Bressan','Chereau','Cometto','Feldbinder','Fliegl','Fruehauf','Grapar','Koegel','Krone','O.ME.P.S','Mega','Mistrall','Neptun','Santi','Schmitz','Schwarzmuller','Sermac','Spitzer','Stas','Umbra Rimorchi','Sommer','Vaas','Zaslaw','Zorzi','Други']
  ]
);
var ccp = new Array
(
  [
    ['Авто газови уредби','','бутилки','инжекцион','изпарители','комплект метанови уредби','комплект пропан-бутан уредби','други'],
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','тавани','шибидах','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','теглич','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Сервизно оборудване','','автоподемници','автосервизно оборудване','баланс-тежести','баланс-машини','бояджийски камери','заваръчни апарати','компресори','машини-монтаж/демонтаж на гуми','подемници','преси / крикове','ръчни/пневматични инструменти','стендове за реглаж','тенекеджийски интрументи','уреди за диагностика','хидравлични преси','консумативи','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Турбокомпресори','','интеркулери','актуатори','магнетвентили','меки връзки','въздуховоди','ремонтни комплекти','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Авто газови уредби','','бутилки','инжекцион','изпарители','комплект метанови уредби','комплект пропан-бутан уредби','други'],
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','тавани','хардтоп','шибидах','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','лебедка','мигачи','решетки','стопове','теглич','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Сервизно оборудване','','автоподемници','автосервизно оборудване','баланс-тежести','баланс-машини','бояджийски камери','заваръчни апарати','компресори','машини-монтаж/демонтаж на гуми','подемници','преси / крикове','ръчни/пневматични инструменти','стендове за реглаж','тенекеджийски интрументи','уреди за диагностика','хидравлични преси','консумативи','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Турбокомпресори','','интеркулери','актуатори','магнетвентили','меки връзки','въздуховоди','ремонтни комплекти','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Авто газови уредби','','бутилки','изпарители','комплект метанови уредби','комплект пропан-бутан уредби','други'],
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','тавани','шибидах','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','теглич','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Сервизно оборудване','','автоподемници','автосервизно оборудване','баланс-тежести','баланс-машини','бояджийски камери','заваръчни апарати','компресори','машини-монтаж/демонтаж на гуми','подемници','преси / крикове','ръчни/пневматични инструменти','стендове за реглаж','тенекеджийски интрументи','уреди за диагностика','хидравлични преси','консумативи','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Турбокомпресори','','интеркулери','актуатори','магнетвентили','меки връзки','въздуховоди','ремонтни комплекти','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Авто газови уредби','','бутилки','изпарители','комплект метанови уредби','комплект пропан-бутан уредби','други'],
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','кабини','калници','капаци','каросерии','ролбари','стъкла','шибидах','тавани','фургони','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','теглич','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Сервизно оборудване','','автоподемници','автосервизно оборудване','баланс-тежести','баланс-машини','бояджийски камери','заваръчни апарати','компресори','машини-монтаж/демонтаж на гуми','подемници','преси / крикове','ръчни/пневматични инструменти','стендове за реглаж','тенекеджийски интрументи','уреди за диагностика','хидравлични преси','консумативи','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Турбокомпресори','','интеркулери','актуатори','магнетвентили','меки връзки','въздуховоди','ремонтни комплекти','други'],
    ['Хидравлична система','','филтри','клапани','комплект ХС','маслени резервоари','маркучи','управляващи блокове','аксесоари','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Авто газови уредби','','бутилки','изпарители','комплект метанови уредби','комплект пропан-бутан уредби','други'],
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','шибидах','тавани','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Хидравлична система','','филтри','клапани','комплект ХС','маслени резервоари','маркучи','управляващи блокове','аксесоари','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Авто газови уредби','','бутилки','изпарители','комплект метанови уредби','комплект пропан-бутан уредби','други'],
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','шибидах','тавани','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Хидравлична система','','филтри','клапани','комплект ХС','маслени резервоари','маркучи','управляващи блокове','аксесоари','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Авто газови уредби','','бутилки','изпарители','комплект метанови уредби','комплект пропан-бутан уредби','други'],
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','шибидах','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Хидравлична система','','филтри','клапани','комплект ХС','маслени резервоари','маркучи','управляващи блокове','аксесоари','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','шибидах','тавани','други'],
    ['Електрическа система','','AirBag','акумулатори','генератори','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','системи за защита','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','уплътнения','фарове','фарове за мъгла','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Тунинг','','бои','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','фолио','други'],
    ['Ходова част','','амортисьори','биалетки','лагери','накрайници','носачи','полувалове','мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Горивна система','','ГНП','горивна помпа','дебитомери','дюзи','инжекциони','карбуратори','резервоари','други'],
    ['Двигател','','блокове','бутала','валове','вериги','гарнитури','глави','картери','клапани','лагери','повдигачи','помпи','ролки','сегменти','семеринги','турбини','турбокомпресори','компресори','цели двигатели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','шибидах','тавани','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Изпускателна система','','генерации','гърнета','катализатори','ламбда сонди','меки връзки','накрайници','резонатори','други'],
    ['Интериор','','барчета','подлакътници','волани','декорации','копчета и бутони','кори','мокети','седалки','табла','уреди','цели салони','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Кормилна система','','кормилни колони','кормилни кутии','механични рейки','накрайници','хидравлични помпи','хидравлични рейки','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','уплътнения','фарове','фарове за мъгла','други'],
    ['Охладителна система','','виско съединители','водни помпи','интеркулери','перки','радиатори','разширителни съдове','термо датчици','термостати','тръбопроводи','фланци','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други']
  ],
  [
    ['Аудио/Видео','','автокасетофони','CD','CD чейнджъри','GPS навигационни системи','високоговорители','DVD','TV приемници','субуфери','усилватели','други'],
    ['Едрогабаритни каросерийни части','','брони','врати','калници','капаци','каросерии','ролбари','стъкла','шибидах','тавани','други'],
    ['Електрическа система','','AirBag','акумулатори','бобини','генератори','делка','ECU (компютър)','ел. инсталации','ел. огледала','ел. стъкла','електромотор','кабели','комутатор','системи за защита','стартери','други'],
    ['Климатизация','','датчици','дехидратори','ел. двигатели','ел. инсталации','изпарители','климатици','климатроници','компресори','кондензатори','панели за управление','печки','хладилници','радиатори','други'],
    ['Консумативи','','защитни полиращи средства','антизамръзващи продукти','детергенти,почистващи средства','почистващи средства - двигател','продукти, пречистващи водата','обезмаслители и освежители','двигателни масла, лубриканти','въздушни филтри','маслени филтри','филтри за климатици','спирачна течност','течност за чистачки','антифриз','фреон','акумулатори','други'],
    ['Малогабаритни каросерийни части','','допълнителни фарове','дръжки','емблеми','лайстни','мигачи','решетки','стопове','уплътнения','фарове','фарове за мъгла','други'],
    ['Спирачна система','','ABS модули','накладки','серво усилватели','спирачни барабани','спирачни дискове','спирачни маркучи','спирачни помпи','челюсти','други'],
    ['Трансмисия','','автоматични скоростни кутии','кардани','карета','маховик','полуоски','раздатки','ръчни скоростни кутии','съединители','други'],
    ['Тунинг','','бои','волани','допълнителни уреди','интериорни детайли','километражи','лакове','лепенки','спойлери','спортни гърнета','спортни седалки','спортни филтри','педали','турбини','фолио','чип тунинг','други'],
    ['Ходова част','','амортисьори','биалетки','диференциали','заден мост','лагери','накрайници','носачи','полувалове','преден мост','пружини','ресьори','тампони','щанги','други']
  ],
  [
    ['Движение','','автомати','амортисьори','бензинови двигатели','венец касети','вериги','водачи','вътрешни гуми','главини','дерайльори','ел. Двигатели','задни венци','колчета','команди','курбели','лапи','накрайници','обтегачи','ос касети','оси','педали','педали с автомат','предни венци','протектори','рамки','спейсъри за вилка','спици','други'],
    ['Управлене','','lock-on заключващи пръстени','болтове','гидолин','динама','ел. Инсталации','жила/брони/накрайници','колодки','кормила','лостчета','накладки/калодки','палци, грифт шифт','ръкохватки','седалки','седла','скоби','скорости','спирачени лостчета','спирачки','тапи за кормило','чашки','други']
  ]
);
var cca = new Array
(
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Ангелски очи','Вериги за сняг','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника за автомобила','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Кодочетци','кристални: фарове, стопове, мигачи','Лип спойлери','Навигация','Неон','Осветление ','Парктроници','Седалки - обикновени, спортни','Спойлери, брони и аксесоари към тях','Спортни гърнета','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Тасове','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Ангелски очи','Вериги за сняг','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника за автомобила','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Кодочетци','кристални: фарове, стопове, мигачи','Лип спойлери','Навигация','Неон','Осветление ','Парктроници','Седалки - обикновени, спортни','Спойлери, брони и аксесоари към тях','Спортни гърнета','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Тасове','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Ангелски очи','Вериги за сняг','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника за автомобила','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Кодочетци','кристални: фарове, стопове, мигачи','Лип спойлери','Навигация','Неон','Осветление ','Парктроници','Седалки - обикновени, спортни','Спойлери, брони и аксесоари към тях','Спортни гърнета','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Тасове','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Ангелски очи','Вериги за сняг','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника за автомобила','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Кодочетци','кристални: фарове, стопове, мигачи','Лип спойлери','Навигация','Неон','Осветление ','Парктроници','Седалки - обикновени, спортни','Спойлери, брони и аксесоари към тях','Спортни гърнета','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Тасове','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Ангелски очи','Ботуши','Вериги за сняг','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Каски','Кодочетци','кристални: фарове, стопове, мигачи','Лип спойлери','Навигация','Неон','Осветление ','Очила','Панталон','Парктроници','Протектори','Ризница','Ръкавици','Седалки - обикновени, спортни','Спойлери, брони и аксесоари към тях','Спортни гърнета','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Цял екип','Чистачки','Щори','Яке','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Ангелски очи','Вериги за сняг','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Кодочетци','Навигация','Неон','Осветление ','Парктроници','Седалки','Спойлери, брони и аксесоари към тях','Спортни гърнета','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Тасове','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Вериги за сняг','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Кодочетци','Навигация','Осветление ','Парктроници','Седалки','Брони и аксесоари към тях','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Тасове','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Вериги за сняг','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника ','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Навигация','Осветление ','Парктроници','Седалки','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Тасове','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Навигация','Неон','Осветление ','Седалки','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми','Водоструйки','Волани и аксесоари за волани','Допълнителни огледала','Друга електроника','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','Навигация','Неон','Осветление ','Седалки','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['CD, DVD','LED крушки и светлини','Xenon','Авто крушки','Автокасетофони','Автосиликон','Акумулатори','Аларми и централно заключване','Вериги за сняг','Водоструйки','Допълнителни огледала','Друга електроника ','Екстериорни неметални аксесоари','Зарядни у-ва','Инструменти','Интериорни аксесоари','кристални: фарове, стопове, мигачи','Навигация','Неон','Осветление ','Парктроници','Спойлери, брони и аксесоари към тях','Стелки','Стикери, лепенки, емблеми','Суббуфери','Тапицерии','Тасове','Товароукрепващи средства','Тонколони','Усилватели','Фолио','Халогени','Чистачки','Щори','Други'],
  ['багажник','багажник за автомобил','бидонче','гащета','гривни','детско столче','екип','екип - фланелки','звънец','инструменти','калници','капачки за винтили','каски','катинар','клаксон','клин','компютър','кошница за пазар','кошничка за шише','крачоли и ръкави','лепило / лепенки','маски / филтри','навигация','обувки','огледало','осветление','очила и маски','панталони','помощни колела','помпа','портмонета','протектори','пулсомер','ремарке','рога','ръкавици','светлоотразители','смазочни материали','стойка/степенка','суичъри','фар','чанти/раници','чорапи','шапки','шейни','шпайкове','якета']
);
var cbb = new Array
(
  ['10',['0',''],['1','98'],['54','98/108'],['5','100'],['18','100/108'],['19','100/112'],['20','100/114.3'],['6','108'],['59','108/110'],['24','108/112'],['7','108/114.3'],['8','110'],['25','110/112'],['60','110/114.3'],['2','112'],['61','112/114.3'],['62','112/120'],['63','112/130'],['11','114.3'],['64','114.3/120'],['65','114.3/120.65'],['66','114.3/127'],['67','114.3/130'],['29','115/120'],['68','115/120.65'],['69','115/127'],['70','115/135'],['71','115/139.7'],['14','120'],['34','120/130'],['36','127/135'],['72','135/139.7'],['73','335'],['74','337']],
  ['12',['0',''],['75','114.3/115'],['66','114.3/127'],['76','114.3/135'],['69','115/127'],['35','127'],['72','135/139.7']],
  ['3',['0',''],['1','98'],['2','112'],['3','220'],['4','256']],
  ['4',['0',''],['1','98'],['5','100'],['6','108'],['7','108/114.3'],['8','110'],['2','112'],['9','113.3'],['10','114'],['11','114.3'],['12','114.4'],['13','115'],['14','120'],['15','130'],['16','139.7'],['17','144.3'],['4','256']],
  ['5',['0',''],['1','98'],['5','100'],['18','100/108'],['19','100/112'],['20','100/114.3'],['21','104.3'],['22','105.0'],['23','107.95'],['6','108'],['24','108/112'],['7','108/114.3'],['8','110'],['25','110/112'],['2','112'],['26','113.0'],['10','114'],['27','114.1'],['11','114.3'],['12','114.4'],['13','115'],['28','115.0'],['29','115/120'],['30','117.3'],['31','118'],['14','120'],['32','120.7'],['33','120.65'],['34','120/130'],['35','127'],['36','127/135'],['37','127/139.7'],['15','130'],['38','130.6'],['39','130.65'],['40','135'],['41','135.0'],['42','139'],['16','139.7'],['17','144.3'],['43','150'],['44','160'],['45','165'],['46','165.1'],['47','190']],
  ['6',['0',''],['10','114'],['11','114.3'],['13','115'],['35','127'],['15','130'],['40','135'],['48','136.7'],['42','139'],['49','139.1'],['16','139.7'],['50','170'],['51','180'],['52','205'],['53','210']],
  ['8',['0',''],['1','98'],['54','98/108'],['5','100'],['20','100/114.3'],['6','108'],['55','108.0'],['56','114.0'],['11','114.3'],['15','130'],['16','139.7'],['57','144.0'],['45','165'],['46','165.1'],['58','165.5'],['50','170']],
  ['9',['0',''],['5','100'],['6','108'],['11','114.3']]
);
var ccr = new Array
(
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'Джанти'],[3,'Гуми с джанти']],
  [[1,'Гуми'],[2,'капли/шини'],[3,'Гуми и капли/шини']]
);

function changecmm(a)
{
  if ( document.search&&document.search.pubtype&&document.search.marka&&document.search.model )
    {
      var pt=document.search.pubtype.value;
      var tm=0;
      if ( pt2tm[pt] )
        {
          tm=pt2tm[pt]-1;
        }
      else if ( document.search.topmenu && tm2pt[document.search.topmenu.value] )
        {
          tm=document.search.topmenu.value-1;
        }
      
      if ( a==1 )
        {
          var cat1=document.getElementById('cat1');
          if ( cat1 ) cat1.innerHTML=cats[pt];
          var cat2=document.getElementById('cat2');
          if ( cat2 ) cat2.src='//www.mobile.bg/images/picturess/p'+pt+'.gif';
          var cat3=document.getElementById('cat3');
          var cat4=document.getElementById('cat4');
          var cat5 = document.getElementById('cat5');
          var cat6 = document.getElementById('cat6');
          var cat7 = document.getElementById('cat7');
          var cat8 = document.getElementById('cat8');
          var cat9 = document.getElementById('cat9');
          var cat10 = document.getElementById('cat10');
          var cat11 = document.getElementById('cat11');
          var cat12 = document.getElementById('cat12');
          var cat13 = document.getElementById('cat13');
          var cat14 = document.getElementById('cat14');
          var cat15 = document.getElementById('cat15');
          var cat16 = document.getElementById('cat16');
          var cat17 = document.getElementById('cat17');
          var cat18 = document.getElementById('cat18');
          var cat19 = document.getElementById('cat19');
          var cat20 = document.getElementById('cat20');
          var cat21 = document.getElementById('cat21');
          var nup2 = document.getElementById('nup2');
          var nupb2 = document.getElementById('nupb2');
          for ( cat in cats )
            {  
              var ptico = document.getElementById('ptico_'+cat);
              if ( ptico )
                {
                  if ( cat==pt ) ptico.className="selected"
                  else           ptico.className="" 
                }
            }
          if ( cat3 && cat4 && cat5 && cat6 && cat7 && cat8 && cat9 && cat10 && cat11 && cat12 && cat13 && cat14 && cat15 && cat16 && cat17 && cat18 && cat19 && cat20 && cat21 && nup2 && nupb2 )
            {
              var tm10 = document.getElementById('tm10');
              if ( tm10 ) tm10.disabled=false;
              if ( (pt=='1')||(pt=='2')||(pt=='3')||(pt=='4')||(pt=='5') )
                {
                  cat3.innerHTML='Марка';
                  cat4.innerHTML='Модел';
                  cat5.style.display='block';
                  cat6.style.display='none';
                  cat7.style.display='block';
                  cat8.style.display='none';
                  cat9.innerHTML='Година';
                  cat10.style.display='block';
                  cat11.style.display='none';
                  cat12.style.display='block';
                  cat13.style.display='none';
                  cat14.style.display='none';
                  cat15.style.display='none';
                  cat16.style.display='none';
                  cat17.style.display='none';
                  cat18.style.display='none';
                  cat19.style.display='none';
                  cat20.style.display='block';
                  cat21.style.display='block';
                  nupb2.style.display='inline-block';
                  if ( document.search.location ) document.search.location.value='';
                  if ( document.search.bctype ) document.search.bctype.value='';
                  if ( document.search.bcmarka ) document.search.bcmarka.value='';
                  if ( document.search.bcgears ) document.search.bcgears.value='';
                  if ( document.search.topmenu ) document.search.topmenu.value='1';
                  if ( document.search.partrub ) document.search.partrub.value='';
                  if ( document.search.partelem ) document.search.partelem.value='';
                  if ( document.search.aksess ) document.search.aksess.value='';
                  if ( document.search.extinfo ) document.search.extinfo.value='';
                  if ( document.search.rwrubr ) document.search.rwrubr.value='';
                }
              else if ( (pt=='6')||(pt=='7')||(pt=='8')||(pt=='9')||(pt=='a')||(pt=='b') )
                {
                  cat3.innerHTML='Вид техника';
                  cat4.innerHTML='Марка';
                  cat5.style.display='block';
                  cat6.style.display='none';
                  cat7.style.display='block';
                  cat8.style.display='none';
                  cat9.innerHTML='Година';
                  cat10.style.display='block';
                  cat11.style.display='none';
                  cat12.style.display='none';
                  cat13.style.display='block';
                  cat14.style.display='none';
                  cat15.style.display='none';
                  cat16.style.display='none';
                  cat17.style.display='none';
                  cat18.style.display='none';
                  cat19.style.display='none';
                  cat20.style.display='block';
                  cat21.style.display='block';
                  nupb2.style.display='inline-block';
                  if ( document.search.engine_t ) document.search.engine_t.value='';
                  if ( document.search.transmis ) document.search.transmis.value='';
                  if ( document.search.bctype ) document.search.bctype.value='';
                  if ( document.search.bcmarka ) document.search.bcmarka.value='';
                  if ( document.search.bcgears ) document.search.bcgears.value='';
                  if ( document.search.topmenu ) document.search.topmenu.value='1';
                  if ( document.search.partrub ) document.search.partrub.value='';
                  if ( document.search.partelem ) document.search.partelem.value='';
                  if ( document.search.aksess ) document.search.aksess.value='';
                  if ( document.search.extinfo ) document.search.extinfo.value='';
                  if ( document.search.rwrubr ) document.search.rwrubr.value='';
                }
              else if ( pt=='c' )
                {
                  cat3.innerHTML='Вид техника';
                  cat4.innerHTML='Марка';
                  cat5.style.display='none';
                  cat6.style.display='block';
                  cat7.style.display='none';
                  cat8.style.display='block';
                  cat9.innerHTML='Скорости';
                  cat10.style.display='none';
                  cat11.style.display='block';
                  cat12.style.display='none';
                  cat13.style.display='block';
                  cat14.style.display='none';
                  cat15.style.display='none';
                  cat16.style.display='none';
                  cat17.style.display='none';
                  cat18.style.display='none';
                  cat19.style.display='none';
                  cat20.style.display='block';
                  cat21.style.display='block';
                  nupb2.style.display='inline-block';
                  if ( document.search.marka ) document.search.marka.value='';
                  if ( document.search.model ) document.search.model.value='';
                  if ( document.search.year ) document.search.year.value='';
                  if ( document.search.engine_t ) document.search.engine_t.value='';
                  if ( document.search.transmis ) document.search.transmis.value='';
                  if ( document.search.topmenu ) document.search.topmenu.value='1';
                  if ( document.search.partrub ) document.search.partrub.value='';
                  if ( document.search.partelem ) document.search.partelem.value='';
                  if ( document.search.aksess ) document.search.aksess.value='';
                  if ( document.search.extinfo ) document.search.extinfo.value='';
                  if ( document.search.rwrubr ) document.search.rwrubr.value='';
                }
              else if ( pt=='u' )
                {
                  cat3.innerHTML='Части за';
                  cat4.innerHTML='Категория';
                  cat5.style.display='none';
                  cat6.style.display='none';
                  cat7.style.display='none';
                  cat8.style.display='none';
                  cat9.innerHTML='Част';
                  cat10.style.display='none';
                  cat11.style.display='none';
                  cat12.style.display='none';
                  cat13.style.display='block';
                  cat14.style.display='block';
                  cat15.style.display='block';
                  cat16.style.display='block';
                  cat17.style.display='none';
                  cat18.style.display='none';
                  cat19.style.display='none';
                  cat20.style.display='block';
                  cat21.style.display='block';
                  nup2.checked=false;
                  nupb2.style.display='none';
                  if ( document.search.nup ) setnup(document.search.nup);
                  if ( document.search.marka ) document.search.marka.value='';
                  if ( document.search.model ) document.search.model.value='';
                  if ( document.search.year ) document.search.year.value='';
                  if ( document.search.engine_t ) document.search.engine_t.value='';
                  if ( document.search.transmis ) document.search.transmis.value='';
                  if ( document.search.bctype ) document.search.bctype.value='';
                  if ( document.search.bcmarka ) document.search.bcmarka.value='';
                  if ( document.search.bcgears ) document.search.bcgears.value='';
                  if ( document.search.aksess ) document.search.aksess.value='';
                  if ( document.search.extinfo ) document.search.extinfo.value='';
                  if ( document.search.rwrubr ) document.search.rwrubr.value='';
                }
              else if ( pt=='v' )
                {
                  cat3.innerHTML='Аксесоари за';
                  cat4.innerHTML='Категория';
                  cat5.style.display='none';
                  cat6.style.display='none';
                  cat7.style.display='none';
                  cat8.style.display='none';
                  cat9.innerHTML='Ключова дума';
                  cat10.style.display='none';
                  cat11.style.display='none';
                  cat12.style.display='none';
                  cat13.style.display='block';
                  cat14.style.display='block';
                  cat15.style.display='none';
                  cat16.style.display='none';
                  cat17.style.display='block';
                  cat18.style.display='block';
                  cat19.style.display='none';
                  cat20.style.display='block';
                  cat21.style.display='block';
                  nup2.checked=false;
                  nupb2.style.display='none';
                  if ( document.search.nup ) setnup(document.search.nup);
                  if ( document.search.marka ) document.search.marka.value='';
                  if ( document.search.model ) document.search.model.value='';
                  if ( document.search.year ) document.search.year.value='';
                  if ( document.search.engine_t ) document.search.engine_t.value='';
                  if ( document.search.transmis ) document.search.transmis.value='';
                  if ( document.search.bctype ) document.search.bctype.value='';
                  if ( document.search.bcmarka ) document.search.bcmarka.value='';
                  if ( document.search.bcgears ) document.search.bcgears.value='';
                  if ( document.search.partrub ) document.search.partrub.value='';
                  if ( document.search.partelem ) document.search.partelem.value='';
                  if ( document.search.rwrubr ) document.search.rwrubr.value='';
                }
              else if ( pt=='w' )
                {
                  cat3.innerHTML='Гуми и джанти за';
                  cat4.innerHTML='Категория';
                  cat5.style.display='none';
                  cat6.style.display='none';
                  cat7.style.display='none';
                  cat8.style.display='none';
                  cat9.innerHTML='';
                  cat10.style.display='none';
                  cat11.style.display='none';
                  cat12.style.display='none';
                  cat13.style.display='block';
                  cat14.style.display='block';
                  cat15.style.display='none';
                  cat16.style.display='none';
                  cat17.style.display='none';
                  cat18.style.display='none';
                  cat19.style.display='block';
                  cat20.style.display='block';
                  cat21.style.display='block';
                  nup2.checked=false;
                  nupb2.style.display='none';
                  if ( document.search.nup ) setnup(document.search.nup);
                  if ( document.search.marka ) document.search.marka.value='';
                  if ( document.search.model ) document.search.model.value='';
                  if ( document.search.year ) document.search.year.value='';
                  if ( document.search.engine_t ) document.search.engine_t.value='';
                  if ( document.search.transmis ) document.search.transmis.value='';
                  if ( document.search.bctype ) document.search.bctype.value='';
                  if ( document.search.bcmarka ) document.search.bcmarka.value='';
                  if ( document.search.bcgears ) document.search.bcgears.value='';
                  if ( document.search.partrub ) document.search.partrub.value='';
                  if ( document.search.partelem ) document.search.partelem.value='';
                  if ( document.search.aksess ) document.search.aksess.value='';
                  if ( document.search.extinfo ) document.search.extinfo.value='';
                  if ( document.search.topmenu && document.search.topmenu.value==10 ) document.search.topmenu.value=1;
                  if ( tm10 ) tm10.disabled=true;
                }
              else if ( pt=='y' )
                {
                  cat3.innerHTML='Купува за';
                  cat4.innerHTML='';
                  cat5.style.display='none';
                  cat6.style.display='none';
                  cat7.style.display='none';
                  cat8.style.display='none';
                  cat9.innerHTML='Ключова дума';
                  cat10.style.display='none';
                  cat11.style.display='none';
                  cat12.style.display='none';
                  cat13.style.display='block';
                  cat14.style.display='block';
                  cat15.style.display='none';
                  cat16.style.display='none';
                  cat17.style.display='none';
                  cat18.style.display='block';
                  cat19.style.display='none';
                  cat20.style.display='none';
                  cat21.style.display='none';
                  nup2.checked=false;
                  nupb2.style.display='none';
                  if ( document.search.nup ) setnup(document.search.nup);
                  if ( document.search.marka ) document.search.marka.value='';
                  if ( document.search.model ) document.search.model.value='';
                  if ( document.search.year ) document.search.year.value='';
                  if ( document.search.engine_t ) document.search.engine_t.value='';
                  if ( document.search.transmis ) document.search.transmis.value='';
                  if ( document.search.bctype ) document.search.bctype.value='';
                  if ( document.search.bcmarka ) document.search.bcmarka.value='';
                  if ( document.search.bcgears ) document.search.bcgears.value='';
                  if ( document.search.partrub ) document.search.partrub.value='';
                  if ( document.search.partelem ) document.search.partelem.value='';
                  if ( document.search.aksess ) document.search.aksess.value='';
                  if ( document.search.rwrubr ) document.search.rwrubr.value='';
                  if ( document.search.nup ) document.search.nup.value='';
                }
              else if ( pt=='z' )
                {
                  cat3.innerHTML='Услуги за';
                  cat4.innerHTML='';
                  cat5.style.display='none';
                  cat6.style.display='none';
                  cat7.style.display='none';
                  cat8.style.display='none';
                  cat9.innerHTML='Ключова дума';
                  cat10.style.display='none';
                  cat11.style.display='none';
                  cat12.style.display='none';
                  cat13.style.display='block';
                  cat14.style.display='block';
                  cat15.style.display='none';
                  cat16.style.display='none';
                  cat17.style.display='none';
                  cat18.style.display='block';
                  cat19.style.display='none';
                  cat20.style.display='none';
                  cat21.style.display='none';
                  nup2.checked=false;
                  nupb2.style.display='none';
                  if ( document.search.nup ) setnup(document.search.nup);
                  if ( document.search.marka ) document.search.marka.value='';
                  if ( document.search.model ) document.search.model.value='';
                  if ( document.search.year ) document.search.year.value='';
                  if ( document.search.engine_t ) document.search.engine_t.value='';
                  if ( document.search.transmis ) document.search.transmis.value='';
                  if ( document.search.bctype ) document.search.bctype.value='';
                  if ( document.search.bcmarka ) document.search.bcmarka.value='';
                  if ( document.search.bcgears ) document.search.bcgears.value='';
                  if ( document.search.partrub ) document.search.partrub.value='';
                  if ( document.search.partelem ) document.search.partelem.value='';
                  if ( document.search.aksess ) document.search.aksess.value='';
                  if ( document.search.rwrubr ) document.search.rwrubr.value='';
                  if ( document.search.nup ) document.search.nup.value='';
                }
            }

          if ( document.search.marka && document.search.model && (0<=tm) && (tm<cmm.length) )
            {
              document.search.marka.length=1;
              document.search.model.length=1;
              var i=0;
              while ( i<cmm[tm].length )
                {
                  document.search.marka.options[i+1]=new Option(cmm[tm][i][0],cmm[tm][i][0]);
                  i++;
                }
            }
          if ( document.search.partrub && document.search.partelem && (0<=tm) && (tm<ccp.length) )
            {
              document.search.partrub.length=1;
              document.search.partelem.length=1;
              var i=0;
              while ( i<ccp[tm].length )
                {
                  document.search.partrub.options[i+1]=new Option(ccp[tm][i][0],ccp[tm][i][0]);
                  i++;
                }
            }
          if ( document.search.aksess && (0<=tm) && (tm<cca.length) )
            {
              document.search.aksess.length=1;
              var i=0;
              while ( i<cca[tm].length )
                {
                  document.search.aksess.options[i+1]=new Option(cca[tm][i],cca[tm][i]);
                  i++;
                }
            }
          if ( document.search.twrubr && (0<=tm) && (tm<ccr.length) )
            {
              document.search.twrubr.length=1;
              var i=0;
              while ( i<ccr[tm].length )
                {
                  document.search.twrubr.options[i+1]=new Option(ccr[tm][i][1],ccr[tm][i][0]);
                  i++;
                }
            }
        }
      else
        {
          if ( document.search.marka && document.search.model && (0<=tm) && (tm<cmm.length) )
            {
              document.search.model.length=1;
              var flag=1;
              var i=0;
              while ( (i<cmm[tm].length)&&(flag==1) )
                {
                  if ( cmm[tm][i][0]==document.search.marka.value )
                    {
                      var j=2;
                      while ( j<cmm[tm][i].length )
                        {
                          document.search.model.options[j-1]=new Option(cmm[tm][i][j],cmm[tm][i][j]);
                          j++;
                        }
                      flag=0;
                    }
                  i++;
                }
            }
          if ( document.search.partrub && document.search.partelem && (0<=tm) && (tm<ccp.length) )
            {
              document.search.partelem.length=1;
              var flag=1;
              var i=0;
              while ( (i<ccp[tm].length)&&(flag==1) )
                {
                  if ( ccp[tm][i][0]==document.search.partrub.value )
                    {
                      var j=2;
                      while ( j<ccp[tm][i].length )
                        {
                          document.search.partelem.options[j-1]=new Option(ccp[tm][i][j],ccp[tm][i][j]);
                          j++;
                        }
                      flag=0;
                    }
                  i++;
                }
            }
        }
    }
}

function checkmm(pubtype,marka,model)
{
  var res=0;
  var modelext='';

  var reg;
  if      ( (pubtype=='1') && (marka=='Mercedes-Benz') ) reg = new RegExp("^(A|B|C|CL|CLA|CLC|CLK|CLS|E|GLA|R|S|SL|SLK)$");
  else if ( (pubtype=='1') && (marka=='BMW') )      reg = new RegExp("^(1|2|3|4|5|6|7|M)$");
  else if ( (pubtype=='2') && (marka=='Mercedes-Benz') ) reg = new RegExp("^(G|GL|GLA|GLE|ML)$");
  else if ( (pubtype=='3') && (marka=='Mercedes-Benz') ) reg = new RegExp("^(Sprinter)$");

  if ( reg && (reg.test(model)) )
    {
      res=1;
      if      ( marka=='BMW'                                                   ) { modelext='-серия'; }
      else if ( (marka=='Mercedes-Benz') && ((pubtype=='1') || (pubtype=='2')) ) { modelext='-класа'; }
    }

  return [res,modelext];
}

function changemm(topmenu,marka,model,ps,pubtype,emptyfield,markaext)
{
  if ( topmenu && marka && model )
    {
      var tm=topmenu.value-1;
      model.length=1;
      var flag=1;
      var i=0;
      while ( (i<cmm[tm].length)&&(flag==1) )
        {
          if ( cmm[tm][i][0]==marka.value )
            {
              var modclass='';
              var j=2, k=1;
              while ( j<cmm[tm][i].length )
                {
                  var modval = cmm[tm][i][j], addflag = 1;
                  var mm=(0,''); if ( ps==2 ) mm=checkmm(pubtype,marka.value,modval);
                  if ( modval=='' )
                    {
                      if ( emptyfield ) modval=emptyfield;
                    }
                  else if ( ps==1 )
                    {
                      if ( (pubtype==1) && ((marka.value=='BMW')||(marka.value=='Mercedes-Benz')) && (modval.length==1) ) addflag=0;
                    }
                  else if ( (ps==2) && (mm[0]==1) )
                    {
                      modclass=modval;
                      if ( mm[1]!='-серия' ) modclass=modclass+' ';
                      modval=modval+mm[1];
                    }
                  else if ( modclass!='' )
                    {
                      reg = new RegExp("^"+modclass+".{1,}");
                      if ( reg.test(modval) ) { modval="\u00A0\u00A0\u00A0"+modval; }
                      else                    { modclass='';                           }
                    }
                  if ( addflag==1 )
                    {
                      model.options[k]=new Option(modval,cmm[tm][i][j]);
                      k++;
                    }
                  j++;
                }
              flag=0;
            }
          i++;
        }

      if ( markaext>0 )
        {
          var mm1=document.getElementsByName("f"+markaext)[0];
          if ( mm1.getAttribute('disabled') )
            {
              var i=0;
              while ( i<4 )
                {
                  var mm=document.getElementsByName("f"+(markaext+i))[0];
                  if ( mm )
                    mm.removeAttribute('disabled');
                  i++;
                }
            }
        }
    }
}

function changecp(frm,topmenu,partrub,partelem)
{
  if ( frm && topmenu && partrub && partelem )
    {
      if ( (partrub.value=='Консумативи')||(partrub.value=='Тунинг')||(partrub.value=='Авто газови уредби')||(partrub.value=='Сервизно оборудване')||(partrub.value=='Турбокомпресори') )
        {
          frm.submit();
        }
      else
        {
          var tm=topmenu.value-1;
          partelem.length=1;
          var flag=1;
          var i=0;
          while ( (i<ccp[tm].length)&&(flag==1) )
            {
              if ( ccp[tm][i][0]==partrub.value )
                {
                  var j=2;
                  while ( j<ccp[tm][i].length )
                    {
                      partelem.options[j-1]=new Option(ccp[tm][i][j],ccp[tm][i][j]);
                      j++;
                    }
                  flag=0;
                }
              i++;
            }
        }
    }
}

function changebb(bolts,boltsdist)
{
  if ( bolts && boltsdist )
    {
      boltsdist.length=1;
      var flag=1;
      var i=0;
      while ( (i<cbb.length)&&(flag==1) )
        {
          if ( cbb[i][0]==bolts.value )
            {
              var j=2;
              while ( j<cbb[i].length )
                {
                  boltsdist.options[j-1]=new Option(cbb[i][j][1],cbb[i][j][0]);
                  j++;
                }
              flag=0;
            }
          i++;
        }
    }
}
