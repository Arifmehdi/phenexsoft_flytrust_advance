<!-- hot deal tab start   -->
<style>
.hot-deal-card {
    display: flex;
    background: #FFFFFF;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0px 4px 14px rgba(0,0,0,0.08);
    transition: 0.3s;
    height: 160px;
}

.hot-deal-card:hover {
    transform: translateY(-3px);
}

.hot-left-box {
    width: 150px;
    background: #002B7F;
    color: white;
    padding: 20px 15px;
    border-radius: 14px 0 0 14px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.hot-left-box h6 {
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 8px;
}

.hot-left-box img {
    width: 45px;
}

.hot-right-box {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.hot-title {
    font-size: 17px;
    font-weight: 700;
    color: #1C2B4A;
}

.hot-subtitle {
    font-size: 13px;
    color: #707B8C;
    margin-top: 6px;
}

.code-tag {
    background: #EAF2FF;
    padding: 8px 15px;
    border-radius: 8px;
    font-weight: 600;
    color: #003094;
    margin-bottom: 10px;
    display: inline-block;
}

.btn-learn {
    background: #FFD100;
    border-radius: 8px;
    padding: 8px 18px;
    font-weight: 700;
    border: none;
    color: #003094;
}

.promo-tabs .nav-link.active {
    background: #003094 !important;
    color: white !important;
}

.promo-tabs .nav-link {
    border-radius: 20px;
    padding: 6px 18px;
    font-weight: 500;
}

.carousel-control-prev,
.carousel-control-next {
    background: white;
    border-radius: 50%;
    width: 38px;
    height: 38px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    top: 50%;
}

</style>

<section class="promo-section py-5">
    <div class="container">

        <h2 class="fw-bold mb-4">Hot Deals</h2>

        <!-- Tabs -->
        <ul class="nav nav-pills promo-tabs mb-4">
            <li class="nav-item"><button class="nav-link active" data-category="all">All</button></li>
            <li class="nav-item"><button class="nav-link" data-category="tour">Tour</button></li>
            <li class="nav-item"><button class="nav-link" data-category="flight">Flight</button></li>
            <li class="nav-item"><button class="nav-link" data-category="hotel">Hotel</button></li>
            <li class="nav-item"><button class="nav-link" data-category="others">Others</button></li>
        </ul>

        <!-- Carousel -->
        <div id="hotDealsCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-4">

                        <!-- Card 1 -->
                        <div class="col-md-4 promo-card-wrapper">
                            <div class="hot-deal-card" data-category="tour">
                                <div class="hot-left-box">
                                    <h6>5% Discount*</h6>
                                    <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png">
                                </div>
                                <div class="hot-right-box">
                                    <div>
                                        <div class="hot-title">On Selected Saint Martin Cruises for card payment.</div>
                                        <div class="hot-subtitle">On published rate, valid till 31 Dec 2025.</div>
                                    </div>
                                    <span class="code-tag">SMTOURC1125</span>
                                    <button class="btn-learn">↗ Learn More</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-4 promo-card-wrapper">
                            <div class="hot-deal-card" data-category="tour">
                                <div class="hot-left-box">
                                    <h6>5% Discount*</h6>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968144.png">
                                </div>
                                <div class="hot-right-box">
                                    <div>
                                        <div class="hot-title">Saint Martin Cruises for bKash payment.</div>
                                        <div class="hot-subtitle">Valid till 31 Jan 2026.</div>
                                    </div>
                                    <span class="code-tag">SMTOURB1125</span>
                                    <button class="btn-learn">↗ Learn More</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-md-4 promo-card-wrapper">
                            <div class="hot-deal-card" data-category="flight">
                                <div class="hot-left-box" style="background:#003094;">
                                    <h6>BDT 5,000 OFF</h6>
                                    <img src="https://cdn-icons-png.flaticon.com/512/2983/2983709.png">
                                </div>
                                <div class="hot-right-box">
                                    <div>
                                        <div class="hot-title">Up to BDT 5,000 Off on EBL Payments.</div>
                                        <div class="hot-subtitle">Minimum BDT 35,000 purchase.</div>
                                    </div>
                                    <span class="code-tag">EINT1125</span>
                                    <button class="btn-learn">↗ Learn More</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-4">
                        <!-- Add more cards the same way -->
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#hotDealsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#hotDealsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

    </div>
</section>



<script>
document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".promo-tabs .nav-link");
    const cards = document.querySelectorAll(".hot-deal-card");

    buttons.forEach(btn => {
        btn.addEventListener("click", function () {

            buttons.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            let category = this.getAttribute("data-category");

            cards.forEach(card => {
                let c = card.getAttribute("data-category");

                if (category === "all" || c === category) {
                    card.parentElement.style.display = "block";
                } else {
                    card.parentElement.style.display = "none";
                }
            });
        });
    });

});
</script>
