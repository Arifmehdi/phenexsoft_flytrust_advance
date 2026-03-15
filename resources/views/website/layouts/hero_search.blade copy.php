@push('css')
<style>
          .home-banner {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }

        .home-banner-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .home-banner-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: smoothZoom 20s ease-in-out infinite alternate;
        }

        @keyframes smoothZoom {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }

        .searchbar-wrapper {
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            min-height: 100vh;
            padding: 60px 0;
        }

        .searchbar-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        #searchbar {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            overflow: visible;
            max-width: 1200px;
            margin: 0 auto;
        }

        .search-type {
            display: flex;
            background: #f8f9fa;
            border-bottom: 1px solid #e0e0e0;
            border-radius: 12px 12px 0 0;
        }

        .search-type-tab {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 18px 20px;
            cursor: pointer;
            transition: all 0.3s;
            gap: 10px;
            border-bottom: 3px solid transparent;
        }

        .search-type-tab:hover {
            background: #fff;
        }

        .search-type-tab.active {
            background: #fff;
            border-bottom-color: #2563eb;
        }

        .product-icon {
            width: 24px;
            height: 24px;
            fill: #666;
            transition: all 0.3s;
        }

        .search-type-tab.active .product-icon {
            fill: #2563eb;
        }

        .product {
            font-weight: 600;
            color: #666;
            font-size: 15px;
            transition: all 0.3s;
        }

        .search-type-tab.active .product {
            color: #2563eb;
        }

        .flight {
            padding: 25px;
        }

        .flight-type-wrapper {
            display: flex;
            gap: 30px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .radio {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .radio input[type="radio"] {
            display: none;
        }

        .radio-btn {
            width: 20px;
            height: 20px;
            border: 2px solid #d1d5db;
            border-radius: 50%;
            position: relative;
            transition: all 0.3s;
        }

        .radio input[type="radio"]:checked + .radio-btn {
            border-color: #2563eb;
        }

        .radio input[type="radio"]:checked + .radio-btn::after {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background: #2563eb;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .flight-type-text {
            font-size: 14px;
            font-weight: 500;
            color: #4b5563;
        }

        .flight-search {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .box {
            flex: 1;
            min-width: 180px;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            background: #fff;
            position: relative;
        }

        .box:hover {
            border-color: #2563eb;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.1);
        }

        .box.active {
            border-color: #2563eb;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        .box.location {
            position: relative;
        }

        .box.has-swapper {
            position: relative;
        }

        .swapper {
            position: absolute;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background: #2563eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 2;
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3);
        }

        .swapper::before {
            content: '⇄';
            color: #fff;
            font-size: 16px;
            font-weight: bold;
        }

        .label {
            display: block;
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 4px;
            font-weight: 500;
        }

        .value {
            font-size: 16px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 2px;
        }

        .value span {
            font-size: 14px;
        }

        .sub-value {
            font-size: 12px;
            color: #9ca3af;
            display: block;
        }

        .sub-value.inline-style {
            color: #10b981;
            font-weight: 500;
        }

        .search-btn-container {
            padding: 0 25px 25px;
        }

        .search-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
        }

        .search-btn:active {
            transform: translateY(0);
        }

        /* Airport Suggestion Dropdown */
        .airport-suggestion {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            right: 0;
            background: #fff;
            border: 2px solid #2563eb;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            display: none;
        }

        .airport-suggestion.active {
            display: block;
        }

        .input-wrapper {
            padding: 15px;
            position: relative;
        }

        .input-wrapper input {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border: 2px solid #e5e7eb;
            border-radius: 6px;
            font-size: 14px;
        }

        .input-wrapper input:focus {
            outline: none;
            border-color: #2563eb;
        }

        .close-btn {
            position: absolute;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            font-size: 20px;
            font-weight: bold;
        }

        .close-btn:hover {
            color: #2563eb;
        }

        .airport-list {
            max-height: 250px;
            overflow-y: auto;
            padding: 0 10px 10px;
        }

        .airport-item {
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .airport-item:hover {
            background: #f3f4f6;
        }

        .airport-name {
            font-weight: 600;
            color: #111827;
            font-size: 14px;
        }

        .airport-code {
            color: #6b7280;
            font-size: 12px;
        }

        /* Date Picker */
        .date-picker {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            background: #fff;
            border: 2px solid #2563eb;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            min-width: 300px;
            display: none;
        }

        .date-picker.active {
            display: block;
        }

        .date-picker-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .date-picker-header button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 18px;
            color: #6b7280;
            padding: 5px 10px;
        }

        .date-picker-header button:hover {
            color: #2563eb;
        }

        .date-picker-month {
            font-weight: 600;
            color: #111827;
        }

        .date-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .date-day-name {
            text-align: center;
            font-size: 12px;
            font-weight: 600;
            color: #6b7280;
            padding: 8px;
        }

        .date-day {
            text-align: center;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.2s;
        }

        .date-day:hover {
            background: #eff6ff;
            color: #2563eb;
        }

        .date-day.selected {
            background: #2563eb;
            color: #fff;
        }

        .date-day.disabled {
            color: #d1d5db;
            cursor: not-allowed;
        }

        .date-day.disabled:hover {
            background: transparent;
            color: #d1d5db;
        }

        /* Traveler Modal */
        .traveler-modal {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background: #fff;
            border: 2px solid #2563eb;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            min-width: 320px;
            display: none;
        }

        .traveler-modal.active {
            display: block;
        }

        .traveler-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .traveler-row:last-child {
            border-bottom: none;
        }

        .traveler-label {
            font-weight: 600;
            color: #374151;
            font-size: 14px;
        }

        .traveler-sublabel {
            font-size: 12px;
            color: #9ca3af;
        }

        .traveler-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .qty-btn {
            width: 35px;
            height: 35px;
            border: 2px solid #e5e7eb;
            border-radius: 6px;
            background: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            font-size: 18px;
            color: #6b7280;
            font-weight: bold;
        }

        .qty-btn:hover {
            border-color: #2563eb;
            color: #2563eb;
            background: #eff6ff;
        }

        .qty-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .qty-value {
            min-width: 30px;
            text-align: center;
            font-weight: 600;
            color: #111827;
            font-size: 16px;
        }

        .class-selector {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e5e7eb;
        }

        .class-options {
            display: flex;
            gap: 8px;
            margin-top: 10px;
        }

        .class-option {
            flex: 1;
            padding: 10px 12px;
            border: 2px solid #e5e7eb;
            border-radius: 6px;
            text-align: center;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.3s;
            color: #6b7280;
        }

        .class-option:hover {
            border-color: #2563eb;
            color: #2563eb;
        }

        .class-option.active {
            border-color: #2563eb;
            background: #2563eb;
            color: #fff;
        }

        @media (max-width: 768px) {
            .search-type-tab {
                padding: 12px 10px;
                font-size: 13px;
            }

            .product {
                font-size: 13px;
            }

            .product-icon {
                width: 20px;
                height: 20px;
            }

            .flight-search {
                flex-direction: column;
            }

            .box {
                min-width: 100%;
            }

            .flight-type-wrapper {
                flex-wrap: wrap;
                gap: 15px;
            }

            .swapper {
                left: 50%;
                top: -15px;
                transform: translateX(-50%) rotate(90deg);
            }

            .traveler-modal,
            .date-picker {
                right: auto;
                left: 0;
                min-width: 100%;
            }
        }

        @media (max-width: 576px) {
            .search-type {
                flex-wrap: wrap;
            }

            .search-type-tab {
                flex-basis: 50%;
            }

            .searchbar-wrapper {
                padding: 30px 0;
            }
        }

        /* Tab Content Visibility */
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
</style>
@endpush
    <div class="home-banner">
        <picture class="image-kit home-banner-bg">
            <source media="(max-width: 576px)"
                srcset="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&h=650&fit=crop">
            <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1920&h=1080&fit=crop"
                alt="home banner" class="image-kit">
        </picture>

        <div class="searchbar-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="searchbar" class="full searchbar-visible">
                            <!-- Search Type Tabs -->
                            <div class="search-type">
                                <span class="search-type-tab active" data-tab="flight">
                                    <svg width="25" height="18" viewBox="0 0 24 24" fill="currentColor" class="product-icon">
                                        <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
                                    </svg>
                                    <span class="product">Flight</span>
                                </span>
                                <span class="search-type-tab" data-tab="hotel">
                                    <svg width="25" height="18" viewBox="0 0 24 24" fill="currentColor" class="product-icon">
                                        <path d="M7 13c1.66 0 3-1.34 3-3S8.66 7 7 7s-3 1.34-3 3 1.34 3 3 3zm12-6h-8v7H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4z"/>
                                    </svg>
                                    <span class="product">Hotel</span>
                                </span>
                                <span class="search-type-tab" data-tab="tour">
                                    <svg width="25" height="18" viewBox="0 0 24 24" fill="currentColor" class="product-icon">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                    </svg>
                                    <span class="product">Tour</span>
                                </span>
                                <span class="search-type-tab" data-tab="visa">
                                    <svg width="25" height="18" viewBox="0 0 24 24" fill="currentColor" class="product-icon">
                                        <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
                                    </svg>
                                    <span class="product">Visa</span>
                                </span>
                            </div>

                            <!-- Flight Tab Content -->
                            <div class="tab-content active" id="flight-content">
                                <div class="flight">
                                    <div class="flight-type-wrapper">
                                        <label class="radio">
                                            <input type="radio" name="flight-type" value="One Way" checked>
                                            <span class="radio-btn"></span>
                                            <span class="flight-type-text">One Way</span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="flight-type" value="Round Way">
                                            <span class="radio-btn"></span>
                                            <span class="flight-type-text">Round Way</span>
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="flight-type" value="Multi City">
                                            <span class="radio-btn"></span>
                                            <span class="flight-type-text">Multi City</span>
                                        </label>
                                    </div>

                                    <div class="flight-search bar">
                                        <div class="box location from" id="from-box">
                                            <span class="label">From</span>
                                            <div class="value" id="from-value">Dhaka</div>
                                            <span class="sub-value" id="from-subvalue">DAC, Hazrat Shahjalal International Airport</span>
                                            
                                            <div class="airport-suggestion" id="from-dropdown">
                                                <div class="input-wrapper">
                                                    <input type="text" placeholder="Type to search airport" id="from-search">
                                                    <span class="close-btn" onclick="closeDropdown('from')">×</span>
                                                </div>
                                                <div class="airport-list">
                                                    <div class="airport-item" onclick="selectAirport('from', 'Dhaka', 'DAC, Hazrat Shahjalal International Airport')">
                                                        <div class="airport-name">Dhaka</div>
                                                        <div class="airport-code">DAC, Hazrat Shahjalal International Airport</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectAirport('from', 'Cox\'s Bazar', 'CXB, Cox\'s Bazar Airport')">
                                                        <div class="airport-name">Cox's Bazar</div>
                                                        <div class="airport-code">CXB, Cox's Bazar Airport</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectAirport('from', 'Chittagong', 'CGP, Shah Amanat International Airport')">
                                                        <div class="airport-name">Chittagong</div>
                                                        <div class="airport-code">CGP, Shah Amanat International Airport</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectAirport('from', 'Sylhet', 'ZYL, Osmani International Airport')">
                                                        <div class="airport-name">Sylhet</div>
                                                        <div class="airport-code">ZYL, Osmani International Airport</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box location to has-swapper" id="to-box">
                                            <span class="swapper" onclick="swapLocations()"></span>
                                            <span class="label">To</span>
                                            <div class="value" id="to-value">Cox's Bazar</div>
                                            <span class="sub-value" id="to-subvalue">CXB, Cox's Bazar Airport</span>
                                            
                                            <div class="airport-suggestion" id="to-dropdown">
                                                <div class="input-wrapper">
                                                    <input type="text" placeholder="Type to search airport" id="to-search">
                                                    <span class="close-btn" onclick="closeDropdown('to')">×</span>
                                                </div>
                                                <div class="airport-list">
                                                    <div class="airport-item" onclick="selectAirport('to', 'Dhaka', 'DAC, Hazrat Shahjalal International Airport')">
                                                        <div class="airport-name">Dhaka</div>
                                                        <div class="airport-code">DAC, Hazrat Shahjalal International Airport</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectAirport('to', 'Cox\'s Bazar', 'CXB, Cox\'s Bazar Airport')">
                                                        <div class="airport-name">Cox's Bazar</div>
                                                        <div class="airport-code">CXB, Cox's Bazar Airport</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectAirport('to', 'Chittagong', 'CGP, Shah Amanat International Airport')">
                                                        <div class="airport-name">Chittagong</div>
                                                        <div class="airport-code">CGP, Shah Amanat International Airport</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectAirport('to', 'Sylhet', 'ZYL, Osmani International Airport')">
                                                        <div class="airport-name">Sylhet</div>
                                                        <div class="airport-code">ZYL, Osmani International Airport</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box date depart" id="depart-box">
                                            <span class="label">Departure Date</span>
                                            <div class="value"><span id="depart-day">16</span> <span id="depart-month">Dec'25</span></div>
                                            <span class="sub-value" id="depart-weekday">Tuesday</span>
                                            
                                            <div class="date-picker" id="depart-picker">
                                                <div class="date-picker-header">
                                                    <button onclick="changeMonth('depart', -1)">◀</button>
                                                    <span class="date-picker-month" id="depart-month-display">December 2025</span>
                                                    <button onclick="changeMonth('depart', 1)">▶</button>
                                                </div>
                                                <div class="date-grid" id="depart-grid"></div>
                                            </div>
                                        </div>

                                        <div class="box date return" id="return-box">
                                            <span class="label">Return Date</span>
                                            <span class="sub-value inline-style">Save more on return flight</span>
                                            
                                            <div class="date-picker" id="return-picker">
                                                <div class="date-picker-header">
                                                    <button onclick="changeMonth('return', -1)">◀</button>
                                                    <span class="date-picker-month" id="return-month-display">December 2025</span>
                                                    <button onclick="changeMonth('return', 1)">▶</button>
                                                </div>
                                                <div class="date-grid" id="return-grid"></div>
                                            </div>
                                        </div>

                                        <div class="box traveler" id="traveler-box">
                                            <span class="label">Traveler, Class</span>
                                            <div class="value"><span id="traveler-count">1</span> Traveler</div>
                                            <span class="sub-value" id="class-display">Economy</span>

                                            <div class="traveler-modal" id="traveler-modal">
                                                <div class="traveler-row">
                                                    <div>
                                                        <div class="traveler-label">Adults</div>
                                                        <div class="traveler-sublabel">12+ years</div>
                                                    </div>
                                                    <div class="traveler-controls">
                                                        <button class="qty-btn" onclick="changeQty('adults', -1)">−</button>
                                                        <span class="qty-value" id="adults-count">1</span>
                                                        <button class="qty-btn" onclick="changeQty('adults', 1)">+</button>
                                                    </div>
                                                </div>
                                                <div class="traveler-row">
                                                    <div>
                                                        <div class="traveler-label">Children</div>
                                                        <div class="traveler-sublabel">2-11 years</div>
                                                    </div>
                                                    <div class="traveler-controls">
                                                        <button class="qty-btn" onclick="changeQty('children', -1)">−</button>
                                                        <span class="qty-value" id="children-count">0</span>
                                                        <button class="qty-btn" onclick="changeQty('children', 1)">+</button>
                                                    </div>
                                                </div>
                                                <div class="traveler-row">
                                                    <div>
                                                        <div class="traveler-label">Infants</div>
                                                        <div class="traveler-sublabel">Under 2 years</div>
                                                    </div>
                                                    <div class="traveler-controls">
                                                        <button class="qty-btn" onclick="changeQty('infants', -1)">−</button>
                                                        <span class="qty-value" id="infants-count">0</span>
                                                        <button class="qty-btn" onclick="changeQty('infants', 1)">+</button>
                                                    </div>
                                                </div>
                                                <div class="class-selector">
                                                    <div class="traveler-label">Class</div>
                                                    <div class="class-options">
                                                        <div class="class-option active" onclick="selectClass('Economy', this)">Economy</div>
                                                        <div class="class-option" onclick="selectClass('Business', this)">Business</div>
                                                        <div class="class-option" onclick="selectClass('First', this)">First</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="search-btn-container">
                                    <button type="button" class="search-btn">Search Flights</button>
                                </div>
                            </div>

                            <!-- Hotel Tab Content -->
                            <div class="tab-content" id="hotel-content">
                                <div class="flight">
                                    <div class="flight-search bar">
                                        <div class="box location" id="hotel-destination-box">
                                            <span class="label">Destination</span>
                                            <div class="value" id="hotel-destination-value">Enter city or property</div>
                                            <span class="sub-value" id="hotel-destination-sub"></span>
                                            
                                            <div class="airport-suggestion" id="hotel-destination-dropdown">
                                                <div class="input-wrapper">
                                                    <input type="text" placeholder="Type city or hotel name" id="hotel-destination-search">
                                                    <span class="close-btn" onclick="closeDropdown('hotel-destination')">×</span>
                                                </div>
                                                <div class="airport-list">
                                                    <div class="airport-item" onclick="selectHotelDestination('Dhaka', 'Bangladesh')">
                                                        <div class="airport-name">Dhaka</div>
                                                        <div class="airport-code">Bangladesh</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectHotelDestination('Cox\'s Bazar', 'Bangladesh')">
                                                        <div class="airport-name">Cox's Bazar</div>
                                                        <div class="airport-code">Bangladesh</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectHotelDestination('Chittagong', 'Bangladesh')">
                                                        <div class="airport-name">Chittagong</div>
                                                        <div class="airport-code">Bangladesh</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectHotelDestination('Sylhet', 'Bangladesh')">
                                                        <div class="airport-name">Sylhet</div>
                                                        <div class="airport-code">Bangladesh</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box date" id="hotel-checkin-box">
                                            <span class="label">Check-in</span>
                                            <div class="value"><span id="hotel-checkin-day">16</span> <span id="hotel-checkin-month">Dec'25</span></div>
                                            <span class="sub-value" id="hotel-checkin-weekday">Tuesday</span>
                                            
                                            <div class="date-picker" id="hotel-checkin-picker">
                                                <div class="date-picker-header">
                                                    <button onclick="changeMonth('hotel-checkin', -1)">◀</button>
                                                    <span class="date-picker-month" id="hotel-checkin-month-display">December 2025</span>
                                                    <button onclick="changeMonth('hotel-checkin', 1)">▶</button>
                                                </div>
                                                <div class="date-grid" id="hotel-checkin-grid"></div>
                                            </div>
                                        </div>

                                        <div class="box date" id="hotel-checkout-box">
                                            <span class="label">Check-out</span>
                                            <div class="value"><span id="hotel-checkout-day">18</span> <span id="hotel-checkout-month">Dec'25</span></div>
                                            <span class="sub-value" id="hotel-checkout-weekday">Thursday</span>
                                            
                                            <div class="date-picker" id="hotel-checkout-picker">
                                                <div class="date-picker-header">
                                                    <button onclick="changeMonth('hotel-checkout', -1)">◀</button>
                                                    <span class="date-picker-month" id="hotel-checkout-month-display">December 2025</span>
                                                    <button onclick="changeMonth('hotel-checkout', 1)">▶</button>
                                                </div>
                                                <div class="date-grid" id="hotel-checkout-grid"></div>
                                            </div>
                                        </div>

                                        <div class="box traveler" id="hotel-guests-box">
                                            <span class="label">Guests & Rooms</span>
                                            <div class="value"><span id="hotel-guests-count">2</span> Guests, <span id="hotel-rooms-count">1</span> Room</div>
                                            <span class="sub-value">2 Adults</span>

                                            <div class="traveler-modal" id="hotel-guests-modal">
                                                <div class="traveler-row">
                                                    <div>
                                                        <div class="traveler-label">Rooms</div>
                                                    </div>
                                                    <div class="traveler-controls">
                                                        <button class="qty-btn" onclick="changeHotelQty('rooms', -1)">−</button>
                                                        <span class="qty-value" id="hotel-rooms">1</span>
                                                        <button class="qty-btn" onclick="changeHotelQty('rooms', 1)">+</button>
                                                    </div>
                                                </div>
                                                <div class="traveler-row">
                                                    <div>
                                                        <div class="traveler-label">Adults</div>
                                                        <div class="traveler-sublabel">12+ years</div>
                                                    </div>
                                                    <div class="traveler-controls">
                                                        <button class="qty-btn" onclick="changeHotelQty('adults', -1)">−</button>
                                                        <span class="qty-value" id="hotel-adults">2</span>
                                                        <button class="qty-btn" onclick="changeHotelQty('adults', 1)">+</button>
                                                    </div>
                                                </div>
                                                <div class="traveler-row">
                                                    <div>
                                                        <div class="traveler-label">Children</div>
                                                        <div class="traveler-sublabel">0-11 years</div>
                                                    </div>
                                                    <div class="traveler-controls">
                                                        <button class="qty-btn" onclick="changeHotelQty('children', -1)">−</button>
                                                        <span class="qty-value" id="hotel-children">0</span>
                                                        <button class="qty-btn" onclick="changeHotelQty('children', 1)">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-btn-container">
                                    <button type="button" class="search-btn">Search Hotels</button>
                                </div>
                            </div>

                            <!-- Tour Tab Content -->
                            <div class="tab-content" id="tour-content">
                                <div class="flight">
                                    <div class="flight-search bar">
                                        <div class="box location" id="tour-destination-box">
                                            <span class="label">Destination</span>
                                            <div class="value" id="tour-destination-value">Where to go?</div>
                                            <span class="sub-value" id="tour-destination-sub"></span>
                                            
                                            <div class="airport-suggestion" id="tour-destination-dropdown">
                                                <div class="input-wrapper">
                                                    <input type="text" placeholder="Type destination" id="tour-destination-search">
                                                    <span class="close-btn" onclick="closeDropdown('tour-destination')">×</span>
                                                </div>
                                                <div class="airport-list">
                                                    <div class="airport-item" onclick="selectTourDestination('Sundarbans', 'Mangrove Forest Tour')">
                                                        <div class="airport-name">Sundarbans</div>
                                                        <div class="airport-code">Mangrove Forest Tour</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectTourDestination('Cox\'s Bazar', 'Beach & Sea Tour')">
                                                        <div class="airport-name">Cox's Bazar</div>
                                                        <div class="airport-code">Beach & Sea Tour</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectTourDestination('Sajek Valley', 'Hill Track Adventure')">
                                                        <div class="airport-name">Sajek Valley</div>
                                                        <div class="airport-code">Hill Track Adventure</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectTourDestination('Saint Martin', 'Island Exploration')">
                                                        <div class="airport-name">Saint Martin</div>
                                                        <div class="airport-code">Island Exploration</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-btn-container">
                                    <button type="button" class="search-btn">Search Tours</button>
                                </div>
                            </div>

                            <!-- Visa Tab Content -->
                            <div class="tab-content" id="visa-content">
                                <div class="flight">
                                    <div class="flight-search bar">
                                        <div class="box location" id="visa-country-box">
                                            <span class="label">Destination Country</span>
                                            <div class="value" id="visa-country-value">Select country</div>
                                            <span class="sub-value" id="visa-country-sub"></span>
                                            
                                            <div class="airport-suggestion" id="visa-country-dropdown">
                                                <div class="input-wrapper">
                                                    <input type="text" placeholder="Type country name" id="visa-country-search">
                                                    <span class="close-btn" onclick="closeDropdown('visa-country')">×</span>
                                                </div>
                                                <div class="airport-list">
                                                    <div class="airport-item" onclick="selectVisaCountry('United States', 'USA')">
                                                        <div class="airport-name">United States</div>
                                                        <div class="airport-code">USA</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaCountry('United Kingdom', 'UK')">
                                                        <div class="airport-name">United Kingdom</div>
                                                        <div class="airport-code">UK</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaCountry('Canada', 'CAN')">
                                                        <div class="airport-name">Canada</div>
                                                        <div class="airport-code">CAN</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaCountry('Australia', 'AUS')">
                                                        <div class="airport-name">Australia</div>
                                                        <div class="airport-code">AUS</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaCountry('Dubai', 'UAE')">
                                                        <div class="airport-name">Dubai</div>
                                                        <div class="airport-code">UAE</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaCountry('Malaysia', 'MYS')">
                                                        <div class="airport-name">Malaysia</div>
                                                        <div class="airport-code">MYS</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box location" id="visa-type-box">
                                            <span class="label">Visa Type</span>
                                            <div class="value" id="visa-type-value">Tourist Visa</div>
                                            <span class="sub-value" id="visa-type-sub">Short term visit</span>
                                            
                                            <div class="airport-suggestion" id="visa-type-dropdown">
                                                <div class="input-wrapper">
                                                    <input type="text" placeholder="Select visa type" id="visa-type-search">
                                                    <span class="close-btn" onclick="closeDropdown('visa-type')">×</span>
                                                </div>
                                                <div class="airport-list">
                                                    <div class="airport-item" onclick="selectVisaType('Tourist Visa', 'Short term visit')">
                                                        <div class="airport-name">Tourist Visa</div>
                                                        <div class="airport-code">Short term visit</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaType('Business Visa', 'Business purpose')">
                                                        <div class="airport-name">Business Visa</div>
                                                        <div class="airport-code">Business purpose</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaType('Student Visa', 'Study abroad')">
                                                        <div class="airport-name">Student Visa</div>
                                                        <div class="airport-code">Study abroad</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaType('Work Visa', 'Employment')">
                                                        <div class="airport-name">Work Visa</div>
                                                        <div class="airport-code">Employment</div>
                                                    </div>
                                                    <div class="airport-item" onclick="selectVisaType('Transit Visa', 'Airport transit')">
                                                        <div class="airport-name">Transit Visa</div>
                                                        <div class="airport-code">Airport transit</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-btn-container">
                                    <button type="button" class="search-btn">Check Visa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tab switching
        document.querySelectorAll('.search-type-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.search-type-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                this.classList.add('active');
                const tabName = this.getAttribute('data-tab');
                document.getElementById(tabName + '-content').classList.add('active');
            });
        });

        // Airport dropdown
        document.getElementById('from-box').addEventListener('click', function(e) {
            if (!e.target.closest('.airport-suggestion')) {
                toggleDropdown('from');
            }
        });

        document.getElementById('to-box').addEventListener('click', function(e) {
            if (!e.target.closest('.airport-suggestion')) {
                toggleDropdown('to');
            }
        });

        function toggleDropdown(type) {
            const dropdown = document.getElementById(type + '-dropdown');
            const box = document.getElementById(type + '-box');
            
            closeAllDropdowns();
            
            dropdown.classList.add('active');
            box.classList.add('active');
        }

        function closeDropdown(type) {
            const dropdown = document.getElementById(type + '-dropdown');
            const box = document.getElementById(type + '-box');
            dropdown.classList.remove('active');
            box.classList.remove('active');
        }

        function selectAirport(type, city, code) {
            document.getElementById(type + '-value').textContent = city;
            document.getElementById(type + '-subvalue').textContent = code;
            closeDropdown(type);
        }

        // Swap locations
        function swapLocations() {
            const fromValue = document.getElementById('from-value').textContent;
            const fromSub = document.getElementById('from-subvalue').textContent;
            const toValue = document.getElementById('to-value').textContent;
            const toSub = document.getElementById('to-subvalue').textContent;
            
            document.getElementById('from-value').textContent = toValue;
            document.getElementById('from-subvalue').textContent = toSub;
            document.getElementById('to-value').textContent = fromValue;
            document.getElementById('to-subvalue').textContent = fromSub;
        }

        // Date picker
        let currentMonth = { depart: new Date(2025, 11), return: new Date(2025, 11) };

        document.getElementById('depart-box').addEventListener('click', function(e) {
            if (!e.target.closest('.date-picker')) {
                toggleDatePicker('depart');
            }
        });

        document.getElementById('return-box').addEventListener('click', function(e) {
            if (!e.target.closest('.date-picker')) {
                toggleDatePicker('return');
            }
        });

        function toggleDatePicker(type) {
            const picker = document.getElementById(type + '-picker');
            const box = document.getElementById(type + '-box');
            
            closeAllDropdowns();
            
            picker.classList.add('active');
            box.classList.add('active');
            generateCalendar(type);
        }

        function generateCalendar(type) {
            const grid = document.getElementById(type + '-grid');
            const monthDisplay = document.getElementById(type + '-month-display');
            const date = currentMonth[type];
            
            const month = date.getMonth();
            const year = date.getFullYear();
            
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'];
            
            monthDisplay.textContent = monthNames[month] + ' ' + year;
            
            grid.innerHTML = '';
            
            // Day names
            const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            dayNames.forEach(day => {
                const dayEl = document.createElement('div');
                dayEl.className = 'date-day-name';
                dayEl.textContent = day;
                grid.appendChild(dayEl);
            });
            
            // First day of month
            const firstDay = new Date(year, month, 1).getDay();
            
            // Empty cells
            for (let i = 0; i < firstDay; i++) {
                const empty = document.createElement('div');
                grid.appendChild(empty);
            }
            
            // Days
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            for (let day = 1; day <= daysInMonth; day++) {
                const dayEl = document.createElement('div');
                dayEl.className = 'date-day';
                dayEl.textContent = day;
                dayEl.onclick = () => selectDate(type, day, month, year);
                grid.appendChild(dayEl);
            }
        }

        function changeMonth(type, delta) {
            currentMonth[type].setMonth(currentMonth[type].getMonth() + delta);
            generateCalendar(type);
        }

        function selectDate(type, day, month, year) {
            const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            
            const date = new Date(year, month, day);
            const weekday = dayNames[date.getDay()];
            
            document.getElementById(type + '-day').textContent = day;
            document.getElementById(type + '-month').textContent = monthNames[month] + "'" + year.toString().slice(-2);
            document.getElementById(type + '-weekday').textContent = weekday;
            
            closeDatePicker(type);
        }

        function closeDatePicker(type) {
            const picker = document.getElementById(type + '-picker');
            const box = document.getElementById(type + '-box');
            picker.classList.remove('active');
            box.classList.remove('active');
        }

        // Traveler modal
        document.getElementById('traveler-box').addEventListener('click', function(e) {
            if (!e.target.closest('.traveler-modal')) {
                toggleTravelerModal();
            }
        });

        function toggleTravelerModal() {
            const modal = document.getElementById('traveler-modal');
            const box = document.getElementById('traveler-box');
            
            closeAllDropdowns();
            
            modal.classList.toggle('active');
            box.classList.toggle('active');
        }

        // Change quantity
        function changeQty(type, change) {
            const countEl = document.getElementById(type + '-count');
            let value = parseInt(countEl.textContent);
            value = Math.max(0, value + change);
            
            if (type === 'adults') {
                value = Math.max(1, value);
            }
            
            countEl.textContent = value;
            updateTravelerDisplay();
        }

        function updateTravelerDisplay() {
            const adults = parseInt(document.getElementById('adults-count').textContent);
            const children = parseInt(document.getElementById('children-count').textContent);
            const infants = parseInt(document.getElementById('infants-count').textContent);
            const total = adults + children + infants;
            
            document.getElementById('traveler-count').textContent = total;
        }

        // Select class
        function selectClass(className, element) {
            document.querySelectorAll('.class-option').forEach(opt => opt.classList.remove('active'));
            element.classList.add('active');
            document.getElementById('class-display').textContent = className;
        }

        // Close all dropdowns
        function closeAllDropdowns() {
            document.querySelectorAll('.airport-suggestion, .date-picker, .traveler-modal').forEach(el => {
                el.classList.remove('active');
            });
            document.querySelectorAll('.box').forEach(box => {
                box.classList.remove('active');
            });
        }

        // Click outside to close
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.box')) {
                closeAllDropdowns();
            }
        });

        // Initialize calendar
        generateCalendar('depart');
        generateCalendar('return');

        // Hotel Tab Functions
        document.getElementById('hotel-destination-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.airport-suggestion')) {
                toggleDropdown('hotel-destination');
            }
        });

        document.getElementById('hotel-checkin-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.date-picker')) {
                toggleDatePicker('hotel-checkin');
            }
        });

        document.getElementById('hotel-checkout-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.date-picker')) {
                toggleDatePicker('hotel-checkout');
            }
        });

        document.getElementById('hotel-guests-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.traveler-modal')) {
                const modal = document.getElementById('hotel-guests-modal');
                const box = document.getElementById('hotel-guests-box');
                closeAllDropdowns();
                modal.classList.toggle('active');
                box.classList.toggle('active');
            }
        });

        function selectHotelDestination(city, country) {
            document.getElementById('hotel-destination-value').textContent = city;
            document.getElementById('hotel-destination-sub').textContent = country;
            closeDropdown('hotel-destination');
        }

        function changeHotelQty(type, change) {
            const countEl = document.getElementById('hotel-' + type);
            let value = parseInt(countEl.textContent);
            value = Math.max(type === 'adults' ? 1 : 0, value + change);
            if (type === 'rooms') value = Math.max(1, value);
            
            countEl.textContent = value;
            
            const adults = parseInt(document.getElementById('hotel-adults').textContent);
            const children = parseInt(document.getElementById('hotel-children').textContent);
            const rooms = parseInt(document.getElementById('hotel-rooms').textContent);
            const total = adults + children;
            
            document.getElementById('hotel-guests-count').textContent = total;
            document.getElementById('hotel-rooms-count').textContent = rooms;
        }

        // Tour Tab Functions
        document.getElementById('tour-destination-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.airport-suggestion')) {
                toggleDropdown('tour-destination');
            }
        });

        document.getElementById('tour-start-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.date-picker')) {
                toggleDatePicker('tour-start');
            }
        });

        document.getElementById('tour-end-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.date-picker')) {
                toggleDatePicker('tour-end');
            }
        });

        document.getElementById('tour-travelers-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.traveler-modal')) {
                const modal = document.getElementById('tour-travelers-modal');
                const box = document.getElementById('tour-travelers-box');
                closeAllDropdowns();
                modal.classList.toggle('active');
                box.classList.toggle('active');
            }
        });

        function selectTourDestination(place, type) {
            document.getElementById('tour-destination-value').textContent = place;
            document.getElementById('tour-destination-sub').textContent = type;
            closeDropdown('tour-destination');
        }

        function changeTourQty(type, change) {
            const countEl = document.getElementById('tour-' + type);
            let value = parseInt(countEl.textContent);
            value = Math.max(type === 'adults' ? 1 : 0, value + change);
            
            countEl.textContent = value;
            
            const adults = parseInt(document.getElementById('tour-adults').textContent);
            const children = parseInt(document.getElementById('tour-children').textContent);
            const total = adults + children;
            
            document.getElementById('tour-travelers-count').textContent = total;
        }

        // Visa Tab Functions
        document.getElementById('visa-country-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.airport-suggestion')) {
                toggleDropdown('visa-country');
            }
        });

        document.getElementById('visa-type-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.airport-suggestion')) {
                toggleDropdown('visa-type');
            }
        });

        document.getElementById('visa-travel-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.date-picker')) {
                toggleDatePicker('visa-travel');
            }
        });

        document.getElementById('visa-applicants-box')?.addEventListener('click', function(e) {
            if (!e.target.closest('.traveler-modal')) {
                const modal = document.getElementById('visa-applicants-modal');
                const box = document.getElementById('visa-applicants-box');
                closeAllDropdowns();
                modal.classList.toggle('active');
                box.classList.toggle('active');
            }
        });

        function selectVisaCountry(country, code) {
            document.getElementById('visa-country-value').textContent = country;
            document.getElementById('visa-country-sub').textContent = code;
            closeDropdown('visa-country');
        }

        function selectVisaType(type, desc) {
            document.getElementById('visa-type-value').textContent = type;
            document.getElementById('visa-type-sub').textContent = desc;
            closeDropdown('visa-type');
        }

        function changeVisaQty(type, change) {
            const countEl = document.getElementById('visa-' + type);
            let value = parseInt(countEl.textContent);
            value = Math.max(type === 'adults' ? 1 : 0, value + change);
            
            countEl.textContent = value;
            
            const adults = parseInt(document.getElementById('visa-adults').textContent);
            const children = parseInt(document.getElementById('visa-children').textContent);
            const total = adults + children;
            
            document.getElementById('visa-applicants-count').textContent = total;
        }

        // Initialize all calendars
        currentMonth['hotel-checkin'] = new Date(2025, 11);
        currentMonth['hotel-checkout'] = new Date(2025, 11);
        currentMonth['tour-start'] = new Date(2025, 11);
        currentMonth['tour-end'] = new Date(2025, 11);
        currentMonth['visa-travel'] = new Date(2026, 0);

        generateCalendar('hotel-checkin');
        generateCalendar('hotel-checkout');
        generateCalendar('tour-start');
        generateCalendar('tour-end');
        generateCalendar('visa-travel');
    </script>
  