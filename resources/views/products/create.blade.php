@extends('layouts.dashboard')

@section('content')
    <div class="content" id="selector">
        <div class="row">
            <div class="col-lg-12 m-0-auto">
                <div class="dsh-min-sec mt-2">
                    <div class="container ">
                        <div class="row">
                            <div class="title  w-100 mb-3">
                                <h2 class="pull-left mt-0 mb-0 d-inline-block">Create Product</h2>
                                <p class="text-right w-100 text-sm-center">
                                    <a href="{{route('products.index')}}"
                                       class=" pull-right d-sm-inline-block btn btn-sm btn-dark bg-dark shadow-sm">Cancel</a>
                                </p>
                                <div class="signup-form-min-frm pb-0 pt-5 col-md-12 m-0-auto">
                                    {!! Form::open(['route' => 'products.store', 'class'=>'pb-4', 'method' => 'post','enctype'=>'multipart/form-data','id'=>'product_form']) !!}
                                    <div class="form-group col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1000ms">
                                                    <label>Name</label>
                                                    <input type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name" placeholder="Name">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-lg-4">

                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Category</label>
                                                    <select name="category"
                                                            class="form-control w-100 @error('category') is-invalid @enderror">
                                                        <option value="AC_REFRIGERATION_REPAIR">A/C, Refrigeration
                                                            Repair
                                                        </option>
                                                        <option value="ACADEMIC_SOFTWARE">Academic Software</option>
                                                        <option value="ACCESSORIES">Accessories</option>
                                                        <option value="ACCOUNTING">Accounting</option>
                                                        <option value="ADULT">Adult</option>
                                                        <option value="ADVERTISING">Advertising</option>
                                                        <option value="AFFILIATED_AUTO_RENTAL">Affiliated Auto Rental
                                                        </option>
                                                        <option value="AGENCIES">Agencies</option>
                                                        <option value="AGGREGATORS">Aggregators</option>
                                                        <option value="AGRICULTURAL_COOPERATIVE_FOR_MAIL_ORDER">
                                                            Agricultural Cooperative for Mail Order
                                                        </option>
                                                        <option value="AIR_CARRIERS_AIRLINES">Air Carriers, Airlines
                                                        </option>
                                                        <option value="AIRLINES">Airlines</option>
                                                        <option value="AIRPORTS_FLYING_FIELDS">Airports, Flying Fields
                                                        </option>
                                                        <option value="ALCOHOLIC_BEVERAGES">Alcoholic Beverages</option>
                                                        <option value="AMUSEMENT_PARKS_CARNIVALS">Amusement
                                                            Parks/Carnivals
                                                        </option>
                                                        <option value="ANIMATION">Animation</option>
                                                        <option value="ANTIQUES">Antiques</option>
                                                        <option value="APPLIANCES">Appliances</option>
                                                        <option value="AQUARIAMS_SEAQUARIUMS_DOLPHINARIUMS">Aquariams
                                                            Seaquariums Dolphinariums
                                                        </option>
                                                        <option
                                                            value="ARCHITECTURAL_ENGINEERING_AND_SURVEYING_SERVICES">
                                                            Architectural,Engineering,And Surveying Services
                                                        </option>
                                                        <option value="ART_AND_CRAFT_SUPPLIES">Art & Craft Supplies
                                                        </option>
                                                        <option value="ART_DEALERS_AND_GALLERIES">Art dealers and
                                                            galleries
                                                        </option>
                                                        <option
                                                            value="ARTIFACTS_GRAVE_RELATED_AND_NATIVE_AMERICAN_CRAFTS">
                                                            Artifacts, Grave related, and Native American Crafts
                                                        </option>
                                                        <option value="ARTS_AND_CRAFTS">Arts and crafts</option>
                                                        <option value="ARTS_CRAFTS_AND_COLLECTIBLES">Arts, crafts, and
                                                            collectibles
                                                        </option>
                                                        <option value="AUDIO_BOOKS">Audio books</option>
                                                        <option value="AUTO_ASSOCIATIONS_CLUBS">Auto
                                                            Associations/Clubs
                                                        </option>
                                                        <option value="AUTO_DEALER_USED_ONLY">Auto dealer - used only
                                                        </option>
                                                        <option value="AUTO_RENTALS">Auto Rentals</option>
                                                        <option value="AUTO_SERVICE">Auto service</option>
                                                        <option value="AUTOMATED_FUEL_DISPENSERS">Automated Fuel
                                                            Dispensers
                                                        </option>
                                                        <option value="AUTOMOBILE_ASSOCIATIONS">Automobile
                                                            Associations
                                                        </option>
                                                        <option value="AUTOMOTIVE">Automotive</option>
                                                        <option value="AUTOMOTIVE_REPAIR_SHOPS_NON_DEALER">Automotive
                                                            Repair Shops - Non-Dealer
                                                        </option>
                                                        <option value="AUTOMOTIVE_TOP_AND_BODY_SHOPS">Automotive Top And
                                                            Body Shops
                                                        </option>
                                                        <option value="AVIATION">Aviation</option>
                                                        <option value="BABIES_CLOTHING_AND_SUPPLIES">Babies Clothing &
                                                            Supplies
                                                        </option>
                                                        <option value="BABY">Baby</option>
                                                        <option value="BANDS_ORCHESTRAS_ENTERTAINERS">
                                                            Bands,Orchestras,Entertainers
                                                        </option>
                                                        <option value="BARBIES">Barbies</option>
                                                        <option value="BATH_AND_BODY">Bath and body</option>
                                                        <option value="BATTERIES">Batteries</option>
                                                        <option value="BEAN_BABIES">Bean Babies</option>
                                                        <option value="BEAUTY">Beauty</option>
                                                        <option value="BEAUTY_AND_FRAGRANCES">Beauty and fragrances
                                                        </option>
                                                        <option value="BED_AND_BATH">Bed & Bath</option>
                                                        <option value="BICYCLE_SHOPS_SALES_AND_SERVICE">Bicycle
                                                            Shops-Sales And Service
                                                        </option>
                                                        <option value="BICYCLES_AND_ACCESSORIES">Bicycles &
                                                            Accessories
                                                        </option>
                                                        <option value="BILLIARD_POOL_ESTABLISHMENTS">Billiard/Pool
                                                            Establishments
                                                        </option>
                                                        <option value="BOAT_DEALERS">Boat Dealers</option>
                                                        <option value="BOAT_RENTALS_AND_LEASING">Boat Rentals And
                                                            Leasing
                                                        </option>
                                                        <option value="BOATING_SAILING_AND_ACCESSORIES">Boating, sailing
                                                            and accessories
                                                        </option>
                                                        <option value="BOOKS">Books</option>
                                                        <option value="BOOKS_AND_MAGAZINES">Books and magazines</option>
                                                        <option value="BOOKS_MANUSCRIPTS">Books, Manuscripts</option>
                                                        <option value="BOOKS_PERIODICALS_AND_NEWSPAPERS">Books,
                                                            Periodicals And Newspapers
                                                        </option>
                                                        <option value="BOWLING_ALLEYS">Bowling Alleys</option>
                                                        <option value="BULLETIN_BOARD">Bulletin board</option>
                                                        <option value="BUS_LINE">Bus line</option>
                                                        <option value="BUS_LINES_CHARTERS_TOUR_BUSES">Bus
                                                            Lines,Charters,Tour Buses
                                                        </option>
                                                        <option value="BUSINESS">Business</option>
                                                        <option value="BUSINESS_AND_SECRETARIAL_SCHOOLS">Business and
                                                            secretarial schools
                                                        </option>
                                                        <option value="BUYING_AND_SHOPPING_SERVICES_AND_CLUBS">Buying
                                                            And Shopping Services And Clubs
                                                        </option>
                                                        <option
                                                            value="CABLE_SATELLITE_AND_OTHER_PAY_TELEVISION_AND_RADIO_SERVICES">
                                                            Cable,Satellite,And Other Pay Television And Radio Services
                                                        </option>
                                                        <option value="CABLE_SATELLITE_AND_OTHER_PAY_TV_AND_RADIO">
                                                            Cable, satellite, and other pay TV and radio
                                                        </option>
                                                        <option value="CAMERA_AND_PHOTOGRAPHIC_SUPPLIES">Camera and
                                                            photographic supplies
                                                        </option>
                                                        <option value="CAMERAS">Cameras</option>
                                                        <option value="CAMERAS_AND_PHOTOGRAPHY">Cameras & Photography
                                                        </option>
                                                        <option value="CAMPER_RECREATIONAL_AND_UTILITY_TRAILER_DEALERS">
                                                            Camper,Recreational And Utility Trailer Dealers
                                                        </option>
                                                        <option value="CAMPING_AND_OUTDOORS">Camping and outdoors
                                                        </option>
                                                        <option value="CAMPING_AND_SURVIVAL">Camping & Survival</option>
                                                        <option value="CAR_AND_TRUCK_DEALERS">Car And Truck Dealers
                                                        </option>
                                                        <option value="CAR_AND_TRUCK_DEALERS_USED_ONLY">Car And Truck
                                                            Dealers - Used Only
                                                        </option>
                                                        <option value="CAR_AUDIO_AND_ELECTRONICS">Car Audio &
                                                            Electronics
                                                        </option>
                                                        <option value="CAR_RENTAL_AGENCY">Car rental agency</option>
                                                        <option value="CATALOG_MERCHANT">Catalog Merchant</option>
                                                        <option value="CATALOG_RETAIL_MERCHANT">Catalog/Retail
                                                            Merchant
                                                        </option>
                                                        <option value="CATERING_SERVICES">Catering services</option>
                                                        <option value="CHARITY">Charity</option>
                                                        <option value="CHECK_CASHIER">Check Cashier</option>
                                                        <option value="CHILD_CARE_SERVICES">Child Care Services</option>
                                                        <option value="CHILDREN_BOOKS">Children Books</option>
                                                        <option value="CHIROPODISTS_PODIATRISTS">
                                                            Chiropodists/Podiatrists
                                                        </option>
                                                        <option value="CHIROPRACTORS">Chiropractors</option>
                                                        <option value="CIGAR_STORES_AND_STANDS">Cigar Stores And
                                                            Stands
                                                        </option>
                                                        <option value="CIVIC_SOCIAL_FRATERNAL_ASSOCIATIONS">Civic,
                                                            Social, Fraternal Associations
                                                        </option>
                                                        <option value="CIVIL_SOCIAL_FRAT_ASSOCIATIONS">Civil/Social/Frat
                                                            Associations
                                                        </option>
                                                        <option value="CLOTHING">Clothing</option>
                                                        <option value="CLOTHING_ACCESSORIES_AND_SHOES">Clothing,
                                                            accessories, and shoes
                                                        </option>
                                                        <option value="CLOTHING_RENTAL">Clothing Rental</option>
                                                        <option value="COFFEE_AND_TEA">Coffee and tea</option>
                                                        <option value="COIN_OPERATED_BANKS_AND_CASINOS">Coin Operated
                                                            Banks & Casinos
                                                        </option>
                                                        <option value="COLLECTIBLES">Collectibles</option>
                                                        <option value="COLLECTION_AGENCY">Collection agency</option>
                                                        <option value="COLLEGES_AND_UNIVERSITIES">Colleges and
                                                            universities
                                                        </option>
                                                        <option value="COMMERCIAL_EQUIPMENT">Commercial Equipment
                                                        </option>
                                                        <option value="COMMERCIAL_FOOTWEAR">Commercial Footwear</option>
                                                        <option value="COMMERCIAL_PHOTOGRAPHY">Commercial photography
                                                        </option>
                                                        <option value="COMMERCIAL_PHOTOGRAPHY_ART_AND_GRAPHICS">
                                                            Commercial photography, art, and graphics
                                                        </option>
                                                        <option value="COMMERCIAL_SPORTS_PROFESSIONA">Commercial
                                                            Sports/Professiona
                                                        </option>
                                                        <option value="COMMODITIES_AND_FUTURES_EXCHANGE">Commodities and
                                                            futures exchange
                                                        </option>
                                                        <option value="COMPUTER_AND_DATA_PROCESSING_SERVICES">Computer
                                                            and data processing services
                                                        </option>
                                                        <option value="COMPUTER_HARDWARE_AND_SOFTWARE">Computer Hardware
                                                            & Software
                                                        </option>
                                                        <option
                                                            value="COMPUTER_MAINTENANCE_REPAIR_AND_SERVICES_NOT_ELSEWHERE_CLAS">
                                                            Computer Maintenance, Repair And Services Not Elsewhere Clas
                                                        </option>
                                                        <option value="CONSTRUCTION">Construction</option>
                                                        <option value="CONSTRUCTION_MATERIALS_NOT_ELSEWHERE_CLASSIFIED">
                                                            Construction Materials Not Elsewhere Classified
                                                        </option>
                                                        <option value="CONSULTING_SERVICES">Consulting services</option>
                                                        <option value="CONSUMER_CREDIT_REPORTING_AGENCIES">Consumer
                                                            Credit Reporting Agencies
                                                        </option>
                                                        <option value="CONVALESCENT_HOMES">Convalescent Homes</option>
                                                        <option value="COSMETIC_STORES">Cosmetic Stores</option>
                                                        <option value="COUNSELING_SERVICES_DEBT_MARRIAGE_PERSONAL">
                                                            Counseling Services--Debt,Marriage,Personal
                                                        </option>
                                                        <option value="COUNTERFEIT_CURRENCY_AND_STAMPS">Counterfeit
                                                            Currency and Stamps
                                                        </option>
                                                        <option value="COUNTERFEIT_ITEMS">Counterfeit Items</option>
                                                        <option value="COUNTRY_CLUBS">Country Clubs</option>
                                                        <option value="COURIER_SERVICES">Courier services</option>
                                                        <option
                                                            value="COURIER_SERVICES_AIR_AND_GROUND_AND_FREIGHT_FORWARDERS">
                                                            Courier Services-Air And Ground,And Freight Forwarders
                                                        </option>
                                                        <option value="COURT_COSTS_ALIMNY_CHILD_SUPT">Court
                                                            Costs/Alimny/Child Supt
                                                        </option>
                                                        <option
                                                            value="COURT_COSTS_INCLUDING_ALIMONY_AND_CHILD_SUPPORT_COURTS_OF_LAW">
                                                            Court Costs, Including Alimony and Child Support - Courts of
                                                            Law
                                                        </option>
                                                        <option value="CREDIT_CARDS">Credit Cards</option>
                                                        <option value="CREDIT_UNION">Credit union</option>
                                                        <option value="CULTURE_AND_RELIGION">Culture & Religion</option>
                                                        <option value="DAIRY_PRODUCTS_STORES">Dairy Products Stores
                                                        </option>
                                                        <option value="DANCE_HALLS_STUDIOS_AND_SCHOOLS">Dance
                                                            Halls,Studios,And Schools
                                                        </option>
                                                        <option value="DECORATIVE">Decorative</option>
                                                        <option value="DENTAL">Dental</option>
                                                        <option value="DENTISTS_AND_ORTHODONTISTS">Dentists And
                                                            Orthodontists
                                                        </option>
                                                        <option value="DEPARTMENT_STORES">Department Stores</option>
                                                        <option value="DESKTOP_PCS">Desktop PCs</option>
                                                        <option value="DEVICES">Devices</option>
                                                        <option value="DIECAST_TOYS_VEHICLES">Diecast, Toys Vehicles
                                                        </option>
                                                        <option value="DIGITAL_GAMES">Digital games</option>
                                                        <option value="DIGITAL_MEDIA_BOOKS_MOVIES_MUSIC">Digital
                                                            media,books,movies,music
                                                        </option>
                                                        <option value="DIRECT_MARKETING">Direct Marketing</option>
                                                        <option value="DIRECT_MARKETING_CATALOG_MERCHANT">Direct
                                                            Marketing - Catalog Merchant
                                                        </option>
                                                        <option value="DIRECT_MARKETING_INBOUND_TELE">Direct Marketing -
                                                            Inbound Tele
                                                        </option>
                                                        <option value="DIRECT_MARKETING_OUTBOUND_TELE">Direct Marketing
                                                            - Outbound Tele
                                                        </option>
                                                        <option value="DIRECT_MARKETING_SUBSCRIPTION">Direct Marketing -
                                                            Subscription
                                                        </option>
                                                        <option value="DISCOUNT_STORES">Discount Stores</option>
                                                        <option value="DOOR_TO_DOOR_SALES">Door-To-Door Sales</option>
                                                        <option value="DRAPERY_WINDOW_COVERING_AND_UPHOLSTERY">Drapery,
                                                            window covering, and upholstery
                                                        </option>
                                                        <option value="DRINKING_PLACES">Drinking Places</option>
                                                        <option value="DRUGSTORE">Drugstore</option>
                                                        <option value="DURABLE_GOODS">Durable goods</option>
                                                        <option value="ECOMMERCE_DEVELOPMENT">eCommerce Development
                                                        </option>
                                                        <option value="ECOMMERCE_SERVICES">eCommerce Services</option>
                                                        <option value="EDUCATIONAL_AND_TEXTBOOKS">Educational and
                                                            textbooks
                                                        </option>
                                                        <option value="ELECTRIC_RAZOR_STORES">Electric Razor Stores
                                                        </option>
                                                        <option value="ELECTRICAL_AND_SMALL_APPLIANCE_REPAIR">Electrical
                                                            and small appliance repair
                                                        </option>
                                                        <option value="ELECTRICAL_CONTRACTORS">Electrical Contractors
                                                        <option value="ELECTRICAL_PARTS_AND_EQUIPMENT">Electrical Parts
                                                            and Equipment
                                                        </option>
                                                        <option value="ELECTRONIC_CASH">Electronic Cash</option>
                                                        <option value="ELEMENTARY_AND_SECONDARY_SCHOOLS">Elementary and
                                                            secondary schools
                                                        </option>
                                                        <option value="EMPLOYMENT">Employment</option>
                                                        <option value="ENTERTAINERS">Entertainers</option>
                                                        <option value="ENTERTAINMENT_AND_MEDIA">Entertainment and
                                                            media
                                                        </option>
                                                        <option
                                                            value="EQUIP_TOOL_FURNITURE_AND_APPLIANCE_RENTAL_AND_LEASING">
                                                            Equip, Tool, Furniture, And Appliance Rental And Leasing
                                                        </option>
                                                        <option value="ESCROW">Escrow</option>
                                                        <option value="EVENT_AND_WEDDING_PLANNING">Event & Wedding
                                                            Planning
                                                        </option>
                                                        <option value="EXERCISE_AND_FITNESS">Exercise and fitness
                                                        </option>
                                                        <option value="EXERCISE_EQUIPMENT">Exercise Equipment</option>
                                                        <option value="EXTERMINATING_AND_DISINFECTING_SERVICES">
                                                            Exterminating and disinfecting services
                                                        </option>
                                                        <option value="FABRICS_AND_SEWING">Fabrics & Sewing</option>
                                                        <option value="FAMILY_CLOTHING_STORES">Family Clothing Stores
                                                        </option>
                                                        <option value="FASHION_JEWELRY">Fashion jewelry</option>
                                                        <option value="FAST_FOOD_RESTAURANTS">Fast Food Restaurants
                                                        </option>
                                                        <option value="FICTION_AND_NONFICTION">Fiction and nonfiction
                                                        </option>
                                                        <option value="FINANCE_COMPANY">Finance company</option>
                                                        <option value="FINANCIAL_AND_INVESTMENT_ADVICE">Financial and
                                                            investment advice
                                                        </option>
                                                        <option value="FINANCIAL_INSTITUTIONS_MERCHANDISE_AND_SERVICES">
                                                            Financial Institutions - Merchandise And Services
                                                        </option>
                                                        <option value="FIREARM_ACCESSORIES">Firearm accessories</option>
                                                        <option value="FIREARMS_WEAPONS_AND_KNIVES">Firearms, Weapons
                                                            and Knives
                                                        </option>
                                                        <option value="FIREPLACE_AND_FIREPLACE_SCREENS">Fireplace, and
                                                            fireplace screens
                                                        </option>
                                                        <option value="FIREWORKS">Fireworks</option>
                                                        <option value="FISHING">Fishing</option>
                                                        <option value="FLORISTS">Florists</option>
                                                        <option value="FLOWERS">Flowers</option>
                                                        <option value="FOOD_DRINK_AND_NUTRITION">Food, Drink &
                                                            Nutrition
                                                        </option>
                                                        <option value="FOOD_PRODUCTS">Food Products</option>
                                                        <option value="FOOD_RETAIL_AND_SERVICE">Food retail and
                                                            service
                                                        </option>
                                                        <option value="FRAGRANCES_AND_PERFUMES">Fragrances and
                                                            perfumes
                                                        </option>
                                                        <option value="FREEZER_AND_LOCKER_MEAT_PROVISIONERS">Freezer and
                                                            Locker Meat Provisioners
                                                        </option>
                                                        <option value="FUEL_DEALERS_FUEL_OIL_WOOD_AND_COAL">Fuel
                                                            Dealers-Fuel Oil, Wood & Coal
                                                        </option>
                                                        <option value="FUEL_DEALERS_NON_AUTOMOTIVE">Fuel Dealers - Non
                                                            Automotive
                                                        </option>
                                                        <option value="FUNERAL_SERVICES_AND_CREMATORIES">Funeral
                                                            Services & Crematories
                                                        </option>
                                                        <option value="FURNISHING_AND_DECORATING">Furnishing &
                                                            Decorating
                                                        </option>
                                                        <option value="FURNITURE">Furniture</option>
                                                        <option value="FURRIERS_AND_FUR_SHOPS">Furriers and Fur Shops
                                                        </option>
                                                        <option value="GADGETS_AND_OTHER_ELECTRONICS">Gadgets & other
                                                            electronics
                                                        </option>
                                                        <option value="GAMBLING">Gambling</option>
                                                        <option value="GAME_SOFTWARE">Game Software</option>
                                                        <option value="GAMES">Games</option>
                                                        <option value="GARDEN_SUPPLIES">Garden supplies</option>
                                                        <option value="GENERAL">General</option>
                                                        <option value="GENERAL_CONTRACTORS">General contractors</option>
                                                        <option value="GENERAL_GOVERNMENT">General - Government</option>
                                                        <option value="GENERAL_SOFTWARE">General - Software</option>
                                                        <option value="GENERAL_TELECOM">General - Telecom</option>
                                                        <option value="GIFTS_AND_FLOWERS">Gifts and flowers</option>
                                                        <option value="GLASS_PAINT_AND_WALLPAPER_STORES">Glass,Paint,And
                                                            Wallpaper Stores
                                                        </option>
                                                        <option value="GLASSWARE_CRYSTAL_STORES">Glassware, Crystal
                                                            Stores
                                                        </option>
                                                        <option value="GOVERNMENT">Government</option>
                                                        <option value="GOVERNMENT_IDS_AND_LICENSES">Government IDs and
                                                            Licenses
                                                        </option>
                                                        <option
                                                            value="GOVERNMENT_LICENSED_ON_LINE_CASINOS_ON_LINE_GAMBLING">
                                                            Government Licensed On-Line Casinos - On-Line Gambling
                                                        </option>
                                                        <option value="GOVERNMENT_OWNED_LOTTERIES">Government-Owned
                                                            Lotteries
                                                        </option>
                                                        <option value="GOVERNMENT_SERVICES">Government services</option>
                                                        <option value="GRAPHIC_AND_COMMERCIAL_DESIGN">Graphic &
                                                            Commercial Design
                                                        </option>
                                                        <option value="GREETING_CARDS">Greeting Cards</option>
                                                        <option value="GROCERY_STORES_AND_SUPERMARKETS">Grocery Stores &
                                                            Supermarkets
                                                        </option>
                                                        <option value="HARDWARE_AND_TOOLS">Hardware & Tools</option>
                                                        <option value="HARDWARE_EQUIPMENT_AND_SUPPLIES">Hardware,
                                                            Equipment, and Supplies
                                                        </option>
                                                        <option value="HAZARDOUS_RESTRICTED_AND_PERISHABLE_ITEMS">
                                                            Hazardous, Restricted and Perishable Items
                                                        </option>
                                                        <option value="HEALTH_AND_BEAUTY_SPAS">Health and beauty spas
                                                        </option>
                                                        <option value="HEALTH_AND_NUTRITION">Health & Nutrition</option>
                                                        <option value="HEALTH_AND_PERSONAL_CARE">Health and personal
                                                            care
                                                        </option>
                                                        <option value="HEARING_AIDS_SALES_AND_SUPPLIES">Hearing Aids
                                                            Sales and Supplies
                                                        </option>
                                                        <option value="HEATING_PLUMBING_AC">Heating, Plumbing, AC
                                                        </option>
                                                        <option value="HIGH_RISK_MERCHANT">High Risk Merchant</option>
                                                        <option value="HIRING_SERVICES">Hiring services</option>
                                                        <option value="HOBBIES_TOYS_AND_GAMES">Hobbies, Toys & Games
                                                        </option>
                                                        <option value="HOME_AND_GARDEN">Home and garden</option>
                                                        <option value="HOME_AUDIO">Home Audio</option>
                                                        <option value="HOME_DECOR">Home decor</option>
                                                        <option value="HOME_ELECTRONICS">Home Electronics</option>
                                                        <option value="HOSPITALS">Hospitals
                                                        <option value="HOTELS_MOTELS_INNS_RESORTS">
                                                            Hotels/Motels/Inns/Resorts
                                                        <option value="HOUSEWARES">Housewares
                                                        <option value="HUMAN_PARTS_AND_REMAINS">Human Parts and Remains
                                                        <option value="HUMOROUS_GIFTS_AND_NOVELTIES">Humorous Gifts &
                                                            Novelties
                                                        <option value="HUNTING">Hunting
                                                        <option value="IDS_LICENSES_AND_PASSPORTS">IDs, licenses, and
                                                            passports
                                                        <option value="ILLEGAL_DRUGS_AND_PARAPHERNALIA">Illegal Drugs &
                                                            Paraphernalia
                                                        <option value="INDUSTRIAL">Industrial
                                                        <option value="INDUSTRIAL_AND_MANUFACTURING_SUPPLIES">Industrial
                                                            and manufacturing supplies
                                                        </option>
                                                        <option value="INSURANCE_AUTO_AND_HOME">Insurance - auto and
                                                            home
                                                        </option>
                                                        <option value="INSURANCE_DIRECT">Insurance - Direct</option>
                                                        <option value="INSURANCE_LIFE_AND_ANNUITY">Insurance - life and
                                                            annuity
                                                        </option>
                                                        <option value="INSURANCE_SALES_UNDERWRITING">Insurance
                                                            Sales/Underwriting
                                                        </option>
                                                        <option value="INSURANCE_UNDERWRITING_PREMIUMS">Insurance
                                                            Underwriting, Premiums
                                                        </option>
                                                        <option value="INTERNET_AND_NETWORK_SERVICES">Internet & Network
                                                            Services
                                                        </option>
                                                        <option value="INTRA_COMPANY_PURCHASES">Intra-Company
                                                            Purchases
                                                        </option>
                                                        <option value="LABORATORIES_DENTAL_MEDICAL">
                                                            Laboratories-Dental/Medical
                                                        </option>
                                                        <option value="LANDSCAPING">Landscaping</option>
                                                        <option value="LANDSCAPING_AND_HORTICULTURAL_SERVICES">
                                                            Landscaping And Horticultural Services
                                                        </option>
                                                        <option value="LAUNDRY_CLEANING_SERVICES">Laundry, Cleaning
                                                            Services
                                                        </option>
                                                        <option value="LEGAL">Legal</option>
                                                        <option value="LEGAL_SERVICES_AND_ATTORNEYS">Legal services and
                                                            attorneys
                                                        </option>
                                                        <option value="LOCAL_DELIVERY_SERVICE">Local delivery service
                                                        </option>
                                                        <option value="LOCKSMITH">Locksmith</option>
                                                        <option value="LODGING_AND_ACCOMMODATIONS">Lodging and
                                                            accommodations
                                                        </option>
                                                        <option value="LOTTERY_AND_CONTESTS">Lottery and contests
                                                        </option>
                                                        <option value="LUGGAGE_AND_LEATHER_GOODS">Luggage and leather
                                                            goods
                                                        </option>
                                                        <option value="LUMBER_AND_BUILDING_MATERIALS">Lumber & Building
                                                            Materials
                                                        </option>
                                                        <option value="MAGAZINES">Magazines</option>
                                                        <option value="MAINTENANCE_AND_REPAIR_SERVICES">Maintenance and
                                                            repair services
                                                        </option>
                                                        <option value="MAKEUP_AND_COSMETICS">Makeup and cosmetics
                                                        </option>
                                                        <option value="MANUAL_CASH_DISBURSEMENTS">Manual Cash
                                                            Disbursements
                                                        </option>
                                                        <option value="MASSAGE_PARLORS">Massage Parlors</option>
                                                        <option value="MEDICAL">Medical</option>
                                                        <option value="MEDICAL_AND_PHARMACEUTICAL">Medical &
                                                            Pharmaceutical
                                                        </option>
                                                        <option value="MEDICAL_CARE">Medical care</option>
                                                        <option value="MEDICAL_EQUIPMENT_AND_SUPPLIES">Medical equipment
                                                            and supplies
                                                        </option>
                                                        <option value="MEDICAL_SERVICES">Medical Services</option>
                                                        <option value="MEETING_PLANNERS">Meeting Planners</option>
                                                        <option value="MEMBERSHIP_CLUBS_AND_ORGANIZATIONS">Membership
                                                            clubs and organizations
                                                        </option>
                                                        <option value="MEMBERSHIP_COUNTRY_CLUBS_GOLF">Membership/Country
                                                            Clubs/Golf
                                                        </option>
                                                        <option value="MEMORABILIA">Memorabilia</option>
                                                        <option value="MEN_AND_BOY_CLOTHING_AND_ACCESSORY_STORES">Men's
                                                            And Boy's Clothing And Accessory Stores
                                                        </option>
                                                        <option value="MEN_CLOTHING">Men's Clothing</option>
                                                        <option value="MERCHANDISE">Merchandise</option>
                                                        <option value="METAPHYSICAL">Metaphysical</option>
                                                        <option value="MILITARIA">Militaria</option>
                                                        <option value="MILITARY_AND_CIVIL_SERVICE_UNIFORMS">Military and
                                                            civil service uniforms
                                                        </option>
                                                        <option
                                                            value="MISC._AUTOMOTIVE_AIRCRAFT_AND_FARM_EQUIPMENT_DEALERS">
                                                            Misc">Automotive,Aircraft,And Farm Equipment Dealers
                                                        </option>
                                                        <option value="MISC._GENERAL_MERCHANDISE">Misc">General
                                                            Merchandise
                                                        </option>
                                                        <option value="MISCELLANEOUS_GENERAL_SERVICES">Miscellaneous
                                                            General Services
                                                        </option>
                                                        <option value="MISCELLANEOUS_REPAIR_SHOPS_AND_RELATED_SERVICES">
                                                            Miscellaneous Repair Shops And Related Services
                                                        </option>
                                                        <option value="MODEL_KITS">Model Kits</option>
                                                        <option value="MONEY_TRANSFER_MEMBER_FINANCIAL_INSTITUTION">
                                                            Money Transfer - Member Financial Institution
                                                        </option>
                                                        <option value="MONEY_TRANSFER_MERCHANT">Money
                                                            Transfer--Merchant
                                                        </option>
                                                        <option value="MOTION_PICTURE_THEATERS">Motion Picture
                                                            Theaters
                                                        </option>
                                                        <option value="MOTOR_FREIGHT_CARRIERS_AND_TRUCKING">Motor
                                                            Freight Carriers & Trucking
                                                        </option>
                                                        <option value="MOTOR_HOME_AND_RECREATIONAL_VEHICLE_RENTAL">Motor
                                                            Home And Recreational Vehicle Rental
                                                        </option>
                                                        <option value="MOTOR_HOMES_DEALERS">Motor Homes Dealers</option>
                                                        <option value="MOTOR_VEHICLE_SUPPLIES_AND_NEW_PARTS">Motor
                                                            Vehicle Supplies and New Parts
                                                        </option>
                                                        <option value="MOTORCYCLE_DEALERS">Motorcycle Dealers</option>
                                                        <option value="MOTORCYCLES">Motorcycles</option>
                                                        <option value="MOVIE">Movie</option>
                                                        <option value="MOVIE_TICKETS">Movie tickets</option>
                                                        <option value="MOVING_AND_STORAGE">Moving and storage</option>
                                                        <option value="MULTI_LEVEL_MARKETING">Multi-level marketing
                                                        </option>
                                                        <option value="MUSIC_CDS_CASSETTES_AND_ALBUMS">Music - CDs,
                                                            cassettes and albums
                                                        </option>
                                                        <option value="MUSIC_STORE_INSTRUMENTS_AND_SHEET_MUSIC">Music
                                                            store - instruments and sheet music
                                                        </option>
                                                        <option value="NETWORKING">Networking</option>
                                                        <option value="NEW_AGE">New Age</option>
                                                        <option value="NEW_PARTS_AND_SUPPLIES_MOTOR_VEHICLE">New parts
                                                            and supplies - motor vehicle
                                                        </option>
                                                        <option value="NEWS_DEALERS_AND_NEWSTANDS">News Dealers and
                                                            Newstands
                                                        </option>
                                                        <option value="NON_DURABLE_GOODS">Non-durable goods</option>
                                                        <option value="NON_FICTION">Non-Fiction</option>
                                                        <option value="NON_PROFIT_POLITICAL_AND_RELIGION">Non-Profit,
                                                            Political & Religion
                                                        </option>
                                                        <option value="NONPROFIT">Nonprofit</option>
                                                        <option value="NOVELTIES">Novelties</option>
                                                        <option value="OEM_SOFTWARE">Oem Software</option>
                                                        <option value="OFFICE_SUPPLIES_AND_EQUIPMENT">Office Supplies
                                                            and Equipment
                                                        </option>
                                                        <option value="ONLINE_DATING">Online Dating</option>
                                                        <option value="ONLINE_GAMING">Online gaming</option>
                                                        <option value="ONLINE_GAMING_CURRENCY">Online gaming currency
                                                        </option>
                                                        <option value="ONLINE_SERVICES">online services</option>
                                                        <option value="OOUTBOUND_TELEMARKETING_MERCH">Ooutbound
                                                            Telemarketing Merch
                                                        </option>
                                                        <option value="OPHTHALMOLOGISTS_OPTOMETRIST">
                                                            Ophthalmologists/Optometrist
                                                        </option>
                                                        <option value="OPTICIANS_AND_DISPENSING">Opticians And
                                                            Dispensing
                                                        </option>
                                                        <option value="ORTHOPEDIC_GOODS_PROSTHETICS">Orthopedic
                                                            Goods/Prosthetics
                                                        </option>
                                                        <option value="OSTEOPATHS">Osteopaths</option>
                                                        <option value="OTHER">Other</option>
                                                        <option value="PACKAGE_TOUR_OPERATORS">Package Tour Operators
                                                        </option>
                                                        <option value="PAINTBALL">Paintball</option>
                                                        <option value="PAINTS_VARNISHES_AND_SUPPLIES">Paints, Varnishes,
                                                            and Supplies
                                                        </option>
                                                        <option value="PARKING_LOTS_AND_GARAGES">Parking Lots &
                                                            Garages
                                                        </option>
                                                        <option value="PARTS_AND_ACCESSORIES">Parts and accessories
                                                        </option>
                                                        <option value="PAWN_SHOPS">Pawn Shops</option>
                                                        <option value="PAYCHECK_LENDER_OR_CASH_ADVANCE">Paycheck lender
                                                            or cash advance
                                                        </option>
                                                        <option value="PERIPHERALS">Peripherals</option>
                                                        <option value="PERSONALIZED_GIFTS">Personalized Gifts</option>
                                                        <option value="PET_SHOPS_PET_FOOD_AND_SUPPLIES">Pet shops, pet
                                                            food, and supplies
                                                        </option>
                                                        <option value="PETROLEUM_AND_PETROLEUM_PRODUCTS">Petroleum and
                                                            Petroleum Products
                                                        </option>
                                                        <option value="PETS_AND_ANIMALS">Pets and animals</option>
                                                        <option value="PHOTOFINISHING_LABORATORIES_PHOTO_DEVELOPING">
                                                            Photofinishing Laboratories,Photo Developing
                                                        </option>
                                                        <option value="PHOTOGRAPHIC_STUDIOS_PORTRAITS">Photographic
                                                            studios - portraits
                                                        </option>
                                                        <option value="PHOTOGRAPHY">Photography</option>
                                                        <option value="PHYSICAL_GOOD">Physical Good</option>
                                                        <option value="PICTURE_VIDEO_PRODUCTION">Picture/Video
                                                            Production
                                                        </option>
                                                        <option value="PIECE_GOODS_NOTIONS_AND_OTHER_DRY_GOODS">Piece
                                                            Goods Notions and Other Dry Goods
                                                        </option>
                                                        <option value="PLANTS_AND_SEEDS">Plants and Seeds</option>
                                                        <option value="PLUMBING_AND_HEATING_EQUIPMENTS_AND_SUPPLIES">
                                                            Plumbing & Heating Equipments & Supplies
                                                        </option>
                                                        <option value="POLICE_RELATED_ITEMS">Police-Related Items
                                                        </option>
                                                        <option value="POLITICAL_ORGANIZATIONS">Politcal Organizations
                                                        </option>
                                                        <option value="POSTAL_SERVICES_GOVERNMENT_ONLY">Postal Services
                                                            - Government Only
                                                        </option>
                                                        <option value="POSTERS">Posters</option>
                                                        <option value="PREPAID_AND_STORED_VALUE_CARDS">Prepaid and
                                                            stored value cards
                                                        </option>
                                                        <option value="PRESCRIPTION_DRUGS">Prescription Drugs</option>
                                                        <option value="PROMOTIONAL_ITEMS">Promotional Items</option>
                                                        <option value="PUBLIC_WAREHOUSING_AND_STORAGE">Public
                                                            Warehousing and Storage
                                                        </option>
                                                        <option value="PUBLISHING_AND_PRINTING">Publishing and
                                                            printing
                                                        </option>
                                                        <option value="PUBLISHING_SERVICES">Publishing Services</option>
                                                        <option value="RADAR_DECTORS">Radar Dectors</option>
                                                        <option value="RADIO_TELEVISION_AND_STEREO_REPAIR">Radio,
                                                            television, and stereo repair
                                                        </option>
                                                        <option value="REAL_ESTATE">Real Estate</option>
                                                        <option value="REAL_ESTATE_AGENT">Real estate agent</option>
                                                        <option value="REAL_ESTATE_AGENTS_AND_MANAGERS_RENTALS">Real
                                                            Estate Agents And Managers - Rentals
                                                        </option>
                                                        <option value="RELIGION_AND_SPIRITUALITY_FOR_PROFIT">Religion
                                                            and spirituality for profit
                                                        </option>
                                                        <option value="RELIGIOUS">Religious</option>
                                                        <option value="RELIGIOUS_ORGANIZATIONS">Religious
                                                            Organizations
                                                        </option>
                                                        <option value="REMITTANCE">Remittance</option>
                                                        <option value="RENTAL_PROPERTY_MANAGEMENT">Rental property
                                                            management
                                                        </option>
                                                        <option value="RESIDENTIAL">Residential</option>
                                                        <option value="RETAIL">Retail</option>
                                                        <option value="RETAIL_FINE_JEWELRY_AND_WATCHES">Retail - fine
                                                            jewelry and watches
                                                        </option>
                                                        <option value="REUPHOLSTERY_AND_FURNITURE_REPAIR">Reupholstery
                                                            and furniture repair
                                                        </option>
                                                        <option value="RINGS">Rings</option>
                                                        <option value="ROOFING_SIDING_SHEET_METAL">Roofing/Siding, Sheet
                                                            Metal
                                                        </option>
                                                        <option value="RUGS_AND_CARPETS">Rugs & Carpets</option>
                                                        <option value="SCHOOLS_AND_COLLEGES">Schools and Colleges
                                                        </option>
                                                        <option value="SCIENCE_FICTION">Science Fiction</option>
                                                        <option value="SCRAPBOOKING">Scrapbooking</option>
                                                        <option value="SCULPTURES">Sculptures</option>
                                                        <option value="SECURITIES_BROKERS_AND_DEALERS">Securities -
                                                            Brokers And Dealers
                                                        </option>
                                                        <option value="SECURITY_AND_SURVEILLANCE">Security and
                                                            surveillance
                                                        </option>
                                                        <option value="SECURITY_AND_SURVEILLANCE_EQUIPMENT">Security and
                                                            surveillance equipment
                                                        </option>
                                                        <option value="SECURITY_BROKERS_AND_DEALERS">Security brokers
                                                            and dealers
                                                        </option>
                                                        <option value="SEMINARS">Seminars</option>
                                                        <option value="SERVICE_STATIONS">Service Stations</option>
                                                        <option value="SERVICES">Services</option>
                                                        <option value="SEWING_NEEDLEWORK_FABRIC_AND_PIECE_GOODS_STORES">
                                                            Sewing,Needlework,Fabric And Piece Goods Stores
                                                        </option>
                                                        <option value="SHIPPING_AND_PACKING">Shipping & Packaging
                                                        </option>
                                                        <option value="SHOE_REPAIR_HAT_CLEANING">Shoe Repair/Hat
                                                            Cleaning
                                                        </option>
                                                        <option value="SHOE_STORES">Shoe Stores</option>
                                                        <option value="SHOES">Shoes</option>
                                                        <option value="SNOWMOBILE_DEALERS">Snowmobile Dealers</option>
                                                        <option value="SOFTWARE">Software</option>
                                                        <option value="SPECIALTY_AND_MISC._FOOD_STORES">Specialty and
                                                            misc">food stores
                                                        </option>
                                                        <option
                                                            value="SPECIALTY_CLEANING_POLISHING_AND_SANITATION_PREPARATIONS">
                                                            Specialty Cleaning, Polishing And Sanitation Preparations
                                                        </option>
                                                        <option value="SPECIALTY_OR_RARE_PETS">Specialty or rare pets
                                                        </option>
                                                        <option value="SPORT_GAMES_AND_TOYS">Sport games and toys
                                                        </option>
                                                        <option value="SPORTING_AND_RECREATIONAL_CAMPS">Sporting And
                                                            Recreational Camps
                                                        </option>
                                                        <option value="SPORTING_GOODS">Sporting Goods</option>
                                                        <option value="SPORTS_AND_OUTDOORS">Sports and outdoors</option>
                                                        <option value="SPORTS_AND_RECREATION">Sports & Recreation
                                                        </option>
                                                        <option value="STAMP_AND_COIN">Stamp and coin</option>
                                                        <option value="STATIONARY_PRINTING_AND_WRITING_PAPER">
                                                            Stationary, printing, and writing paper
                                                        </option>
                                                        <option value="STENOGRAPHIC_AND_SECRETARIAL_SUPPORT_SERVICES">
                                                            Stenographic and secretarial support services
                                                        </option>
                                                        <option
                                                            value="STOCKS_BONDS_SECURITIES_AND_RELATED_CERTIFICATES">
                                                            Stocks, Bonds, Securities and Related Certificates
                                                        </option>
                                                        <option value="STORED_VALUE_CARDS">Stored Value Cards</option>
                                                        <option value="SUPPLIES">Supplies</option>
                                                        <option value="SUPPLIES_AND_TOYS">Supplies & Toys</option>
                                                        <option value="SURVEILLANCE_EQUIPMENT">Surveillance Equipment
                                                        </option>
                                                        <option value="SWIMMING_POOLS_AND_SPAS">Swimming Pools & Spas
                                                        </option>
                                                        <option value="SWIMMING_POOLS_SALES_SUPPLIES_SERVICES">Swimming
                                                            Pools-Sales,Supplies,Services
                                                        </option>
                                                        <option value="TAILORS_AND_ALTERATIONS">Tailors and
                                                            alterations
                                                        </option>
                                                        <option value="TAX_PAYMENTS">Tax Payments</option>
                                                        <option value="TAX_PAYMENTS_GOVERNMENT_AGENCIES">Tax Payments -
                                                            Government Agencies
                                                        </option>
                                                        <option value="TAXICABS_AND_LIMOUSINES">Taxicabs and
                                                            limousines
                                                        </option>
                                                        <option value="TELECOMMUNICATION_SERVICES">Telecommunication
                                                            Services
                                                        </option>
                                                        <option value="TELEPHONE_CARDS">Telephone Cards</option>
                                                        <option value="TELEPHONE_EQUIPMENT">Telephone Equipment</option>
                                                        <option value="TELEPHONE_SERVICES">Telephone Services</option>
                                                        <option value="THEATER">Theater</option>
                                                        <option value="TIRE_RETREADING_AND_REPAIR">Tire Retreading and
                                                            Repair
                                                        </option>
                                                        <option value="TOLL_OR_BRIDGE_FEES">Toll or Bridge Fees</option>
                                                        <option value="TOOLS_AND_EQUIPMENT">Tools and equipment</option>
                                                        <option value="TOURIST_ATTRACTIONS_AND_EXHIBITS">Tourist
                                                            Attractions And Exhibits
                                                        </option>
                                                        <option value="TOWING_SERVICE">Towing service</option>
                                                        <option value="TOYS_AND_GAMES">Toys and games</option>
                                                        <option value="TRADE_AND_VOCATIONAL_SCHOOLS">Trade And
                                                            Vocational Schools
                                                        </option>
                                                        <option value="TRADEMARK_INFRINGEMENT">Trademark Infringement
                                                        </option>
                                                        <option value="TRAILER_PARKS_AND_CAMPGROUNDS">Trailer Parks And
                                                            Campgrounds
                                                        </option>
                                                        <option value="TRAINING_SERVICES">Training services</option>
                                                        <option value="TRANSPORTATION_SERVICES">Transportation
                                                            Services
                                                        </option>
                                                        <option value="TRAVEL">Travel</option>
                                                        <option value="TRUCK_AND_UTILITY_TRAILER_RENTALS">Truck And
                                                            Utility Trailer Rentals
                                                        </option>
                                                        <option value="TRUCK_STOP">Truck Stop</option>
                                                        <option value="TYPESETTING_PLATE_MAKING_AND_RELATED_SERVICES">
                                                            Typesetting, Plate Making, and Related Services
                                                        </option>
                                                        <option value="USED_MERCHANDISE_AND_SECONDHAND_STORES">Used
                                                            Merchandise And Secondhand Stores
                                                        </option>
                                                        <option value="USED_PARTS_MOTOR_VEHICLE">Used parts - motor
                                                            vehicle
                                                        </option>
                                                        <option value="UTILITIES">Utilities</option>
                                                        <option value="UTILITIES_ELECTRIC_GAS_WATER_SANITARY">Utilities
                                                            - Electric,Gas,Water,Sanitary
                                                        </option>
                                                        <option value="VARIETY_STORES">Variety Stores</option>
                                                        <option value="VEHICLE_SALES">Vehicle sales</option>
                                                        <option value="VEHICLE_SERVICE_AND_ACCESSORIES">Vehicle service
                                                            and accessories
                                                        </option>
                                                        <option value="VIDEO_EQUIPMENT">Video Equipment</option>
                                                        <option value="VIDEO_GAME_ARCADES_ESTABLISH">Video Game
                                                            Arcades/Establish
                                                        </option>
                                                        <option value="VIDEO_GAMES_AND_SYSTEMS">Video Games & Systems
                                                        </option>
                                                        <option value="VIDEO_TAPE_RENTAL_STORES">Video Tape Rental
                                                            Stores
                                                        </option>
                                                        <option value="VINTAGE_AND_COLLECTIBLE_VEHICLES">Vintage and
                                                            Collectible Vehicles
                                                        </option>
                                                        <option value="VINTAGE_AND_COLLECTIBLES">Vintage and
                                                            collectibles
                                                        </option>
                                                        <option value="VITAMINS_AND_SUPPLEMENTS">Vitamins &
                                                            Supplements
                                                        </option>
                                                        <option value="VOCATIONAL_AND_TRADE_SCHOOLS">Vocational and
                                                            trade schools
                                                        </option>
                                                        <option value="WATCH_CLOCK_AND_JEWELRY_REPAIR">Watch, clock, and
                                                            jewelry repair
                                                        </option>
                                                        <option value="WEB_HOSTING_AND_DESIGN">Web hosting and design
                                                        </option>
                                                        <option value="WELDING_REPAIR">Welding Repair</option>
                                                        <option value="WHOLESALE_CLUBS">Wholesale Clubs</option>
                                                        <option value="WHOLESALE_FLORIST_SUPPLIERS">Wholesale Florist
                                                            Suppliers
                                                        </option>
                                                        <option value="WHOLESALE_PRESCRIPTION_DRUGS">Wholesale
                                                            Prescription Drugs
                                                        </option>
                                                        <option value="WILDLIFE_PRODUCTS">Wildlife Products</option>
                                                        <option value="WIRE_TRANSFER">Wire Transfer</option>
                                                        <option value="WIRE_TRANSFER_AND_MONEY_ORDER">Wire transfer and
                                                            money order
                                                        </option>
                                                        <option value="WOMEN_ACCESSORY_SPECIALITY">Women's
                                                            Accessory/Speciality
                                                        </option>
                                                        <option value="WOMEN_CLOTHING">Women's clothing</option>

                                                    </select>
                                                    @error('category')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group wow w-100 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Type</label>
                                                    <select name="type"
                                                            class="form-control w-100 @error('type') is-invalid @enderror">
                                                        <option value="PHYSICAL">Physical goods</option>
                                                        <option value="DIGITAL">Digital goods</option>
                                                        <option value="SERVICE">Product representing a service. Example: Tech Support</option>
                                                    </select>
                                                    @error('type')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row-editor wow w-100 fadeInDown"
                                                     id="editor" data-wow-duration="1000ms">
                                                    <label>Description</label>
                                                    <textarea
                                                        class="form-control editor @error('description') is-invalid @enderror"
                                                        id="editor" name="description"></textarea>
                                                    @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                      </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group wow w-100 pt-4 fadeInDown"
                                                     data-wow-duration="1500ms">
                                                    <label>Product Url</label>
                                                    <input type="text"
                                                           class="form-control @error('product_url') is-invalid @enderror"
                                                           name="product_url" placeholder="Product Url">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <button type="submit"
                                                class="btn btn-dark btn-lg btn-block wow fadeInDown"
                                                data-wow-duration="1000ms">Submit
                                        </button>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@stop
