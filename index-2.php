<!doctype html>
<html lang="en" dir="ltr">

<?php $title='Index-2' ?>

<?php include './partials/head.php' ?>

<body class="geex-dashboard demo-banking">
	
<?php include './partials/header.php'?>

<main class="geex-main-content">
		
<?php include './partials/sidebar.php'?>
		
<?php include './partials/customizer.php'?>

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">Banking</h2>
					<p class="geex-content__header__subtitle">Welcome to Geex Modern Admin Dashboard</p>
				</div> 
				
<div class="geex-content__header__action">
    <div class="geex-content__header__customizer">
        <button class="geex-btn geex-btn__toggle-sidebar">   
            <i class="uil uil-align-center-alt"></i> 
        </button>
        <button class="geex-btn geex-btn__customizer"> 
            <i class="uil uil-pen"></i> 
            <span>Customizer</span>  
        </button>
    </div> 
    <div class="geex-content__header__action__wrap">
        <ul class="geex-content__header__quickaction">
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18C11.7767 18.0022 13.5025 17.407 14.9 16.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29L16.31 14.9C17.407 13.5025 18.0022 11.7767 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10ZM10 4C11.1867 4 12.3467 4.35189 13.3334 5.01118C14.3201 5.67047 15.0891 6.60754 15.5433 7.7039C15.9974 8.80026 16.1162 10.0067 15.8847 11.1705C15.6532 12.3344 15.0818 13.4035 14.2426 14.2426C13.4035 15.0818 12.3344 15.6532 11.1705 15.8847C10.0067 16.1162 8.80026 15.9974 7.7039 15.5433C6.60754 15.0891 5.67047 14.3201 5.01118 13.3334C4.35189 12.3467 4 11.1867 4 10C4 8.4087 4.63214 6.88258 5.75736 5.75736C6.88258 4.63214 8.4087 4 10 4Z" fill="#464255"/>
                    </svg>                                              
                </a>
                <div class="geex-content__header__searchform geex-content__header__popup">
                    <input type="text" placeholder="Search" class="geex-content__header__btn" />
                    <i class="uil uil-search"></i>
                </div> 
            </li>
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11.9998C12.5523 11.9998 13 11.552 13 10.9998C13 10.4475 12.5523 9.99976 12 9.99976C11.4477 9.99976 11 10.4475 11 10.9998C11 11.552 11.4477 11.9998 12 11.9998Z" fill="#464255"/>
                        <path d="M8 11.9998C8.55229 11.9998 9 11.552 9 10.9998C9 10.4475 8.55229 9.99976 8 9.99976C7.44772 9.99976 7 10.4475 7 10.9998C7 11.552 7.44772 11.9998 8 11.9998Z" fill="#464255"/>
                        <path d="M16 11.9998C16.5523 11.9998 17 11.552 17 10.9998C17 10.4475 16.5523 9.99976 16 9.99976C15.4477 9.99976 15 10.4475 15 10.9998C15 11.552 15.4477 11.9998 16 11.9998Z" fill="#464255"/>
                        <path d="M3.05007 21.87C3.25937 21.9564 3.48366 22.0005 3.71007 22C3.93336 22.0011 4.15461 21.9574 4.36072 21.8716C4.56684 21.7857 4.75364 21.6593 4.91007 21.5L7.41007 19H17.0001C18.3262 19 19.5979 18.4732 20.5356 17.5355C21.4733 16.5979 22.0001 15.3261 22.0001 14V8C22.0001 6.67392 21.4733 5.40215 20.5356 4.46447C19.5979 3.52678 18.3262 3 17.0001 3H7.00007C5.67399 3 4.40222 3.52678 3.46454 4.46447C2.52686 5.40215 2.00007 6.67392 2.00007 8V20.29C1.9969 20.6282 2.09528 20.9596 2.28247 21.2412C2.46966 21.5229 2.73705 21.7419 3.05007 21.87V21.87ZM4.00007 8C4.00007 7.20435 4.31614 6.44129 4.87875 5.87868C5.44136 5.31607 6.20442 5 7.00007 5H17.0001C17.7957 5 18.5588 5.31607 19.1214 5.87868C19.684 6.44129 20.0001 7.20435 20.0001 8V14C20.0001 14.7957 19.684 15.5587 19.1214 16.1213C18.5588 16.6839 17.7957 17 17.0001 17H7.00007C6.86847 16.9992 6.738 17.0245 6.61617 17.0742C6.49433 17.124 6.38351 17.1973 6.29007 17.29L4.00007 19.59V8Z" fill="#464255"/>
                    </svg>                                             
                    <span class="geex-content__header__badge">84</span>
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--message">
                    <h3 class="geex-content__header__popup__title">
                        Messages<span class="content__header__popup__title__count">7</span>
                    </h3>
                    <div class="geex-content__header__popup__content">
                        <ul class="geex-content__header__popup__items">
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Mahabub Alam
                                            <span class="geex-content__header__popup__item__time">1.2 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count">3</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            David Warner
                                            <span class="geex-content__header__popup__item__time">1.7 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count">3</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Mitchel Marsh
                                            <span class="geex-content__header__popup__item__time">2.2 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count">3</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Mike Hesson
                                            <span class="geex-content__header__popup__item__time">2.6 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count">3</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 20H10C10 20.5304 10.2107 21.0391 10.5858 21.4142C10.9609 21.7893 11.4696 22 12 22C12.5304 22 13.0391 21.7893 13.4142 21.4142C13.7893 21.0391 14 20.5304 14 20H20C20.2652 20 20.5196 19.8946 20.7071 19.7071C20.8946 19.5196 21 19.2652 21 19C21 18.7348 20.8946 18.4804 20.7071 18.2929C20.5196 18.1054 20.2652 18 20 18V11C20 8.87827 19.1571 6.84344 17.6569 5.34315C16.1566 3.84285 14.1217 3 12 3C9.87827 3 7.84344 3.84285 6.34315 5.34315C4.84285 6.84344 4 8.87827 4 11V18C3.73478 18 3.48043 18.1054 3.29289 18.2929C3.10536 18.4804 3 18.7348 3 19C3 19.2652 3.10536 19.5196 3.29289 19.7071C3.48043 19.8946 3.73478 20 4 20V20ZM6 11C6 9.4087 6.63214 7.88258 7.75736 6.75736C8.88258 5.63214 10.4087 5 12 5C13.5913 5 15.1174 5.63214 16.2426 6.75736C17.3679 7.88258 18 9.4087 18 11V18H6V11Z" fill="#464255"/>
                    </svg>                                            
                    <span class="geex-content__header__badge bg-info">2</span>
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--notification">
                    <h3 class="geex-content__header__popup__title">
                        Notification<span class="content__header__popup__title__count">5</span>
                    </h3>
                    <div class="geex-content__header__popup__content">
                        <ul class="geex-content__header__popup__items">
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Mahabub Alam
                                            <span class="geex-content__header__popup__item__time">1.3 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Adam Smith
                                            <span class="geex-content__header__popup__item__time">1.7 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            John Doe
                                            <span class="geex-content__header__popup__item__time">2.1 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Bruce Wayne
                                            <span class="geex-content__header__popup__item__time">2.4 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <img class="user-img" src="assets/img/avatar/user.svg" alt="user" />
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--author">
                    <div class="geex-content__header__popup__header">
                        <div class="geex-content__header__popup__header__img">
                            <img src="assets/img/avatar/user.svg" alt="user" />
                        </div>
                        <div class="geex-content__header__popup__header__content">
                            <h3 class="geex-content__header__popup__header__title">Mahabub Alam</h3>
                            <span class="geex-content__header__popup__header__subtitle">CEO, PixcelsThemes</span>
                        </div>
                    </div>
                    <div class="geex-content__header__popup__content">
                        <ul class="geex-content__header__popup__items">
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-cog"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-dollar-alt"></i>
                                    Billing
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-users-alt"></i>
                                    Activity
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-bell"></i>
                                    Help
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="geex-content__header__popup__footer">
                        <a href="#" class="geex-content__header__popup__footer__link">
                            <i class="uil uil-arrow-up-left"></i>Logout
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div> 
			</div> 

			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<div class="geex-content__double-column mb-40">
						<div class="geex-content__section geex-content__income-count">
							<div class="geex-content__section__header">
								<div class="geex-content__section__header__title-part">
									<h4 class="geex-content__section__header__title">Income</h4>
								</div>
							</div>
							<div class="geex-content__section__content">
								<div class="geex-content__section__content__top">
									<div class="geex-content__section__content__top__left">
									<h4 class="geex-content__section__content__amount increment">
										<i class="uil uil-angle-up"></i>
										+4,6%
									</h4>
									<p class="geex-content__section__content__subtitle">Bigger than last week</p>
									</div>
									<div class="geex-content__section__content__top__right">
									<h4 class="geex-content__section__content__price">$1,572.68</h4>
									</div>
								</div>
							<div id="income-chart" class="column-chart"></div>
							</div>
						</div>
						<div class="geex-content__section geex-content__expense-count">
							<div class="geex-content__section__header">
								<div class="geex-content__section__header__title-part">
									<h4 class="geex-content__section__header__title">Expense</h4>
								</div>
							</div>
							<div class="geex-content__section__content">
								<div class="geex-content__section__content__top">
									<div class="geex-content__section__content__top__left">
										<h4 class="geex-content__section__content__amount decrement">
											<i class="uil uil-angle-down"></i>
											-2.5%
										</h4>
										<p class="geex-content__section__content__subtitle">Bigger than last week</p>
										</div>
										<div class="geex-content__section__content__top__right">
										<h4 class="geex-content__section__content__price">$802.16</h4>
									</div>
								</div>
								<div id="expense-chart"></div>
							</div>
						</div>
					</div>

					<div class="geex-content__section geex-content__transaction">
						<div class="geex-content__section__header">
							<div class="geex-content__section__header__title-part">
								<h4 class="geex-content__section__header__title">All Transaction</h4>
							</div>
							<div class="geex-content__section__header__content-part">
								<ul class="nav nav-tabs geex-transaction-tab" id="geex-transaction-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="transaction-history-tab" data-bs-toggle="tab" data-bs-target="#transaction-history-content" type="button" role="tab" aria-controls="transaction-history-content" aria-selected="true">History</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="transaction-upcoming-tab" data-bs-toggle="tab" data-bs-target="#transaction-upcoming-content" type="button" role="tab" aria-controls="transaction-upcoming-content" aria-selected="false">Upcoming</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="transaction-request-tab" data-bs-toggle="tab" data-bs-target="#transaction-request-content" type="button" role="tab" aria-controls="transaction-request-content" aria-selected="false">Request</button>
									</li>
								</ul>
								<ul class="geex-transaction-filter filter-part">
									<li>
										<label for="filterDate" id="geex-content__filter__label">
											<i class="uil-calendar-alt"></i>
										</label>
										<input type="date" id="geex-content__filter__date" name="filterDate">
									</li>
									<li>
										<a href="#" class="geex-content__toggle__btn">
											<i class="uil-search"></i>
										</a>
										<div class="geex-content__toggle__content geex-content__header__searchform">
											<input type="text" placeholder="Search" class="geex-content__header__btn">
											<i class="uil uil-search"></i>
										</div>
									</li>
									<li>
										<a href="#" class="geex-content__toggle__btn">
											<i class="uil-filter"></i>
										</a>
										<div class="geex-content__toggle__content filter-popup">
											<a href="#">Name</a>
											<a href="#">Date</a>
											<a href="#">Amount</a>
											<a href="#">Last Modified</a>
											<button class="geex-btn geex-btn--sm">Apply Filters</button>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="geex-content__section__content">
							<div class="tab-content geex-transaction-content" id="geex-transaction-content">
								<div class="tab-pane fade show active" id="transaction-history-content" role="tabpanel" aria-labelledby="transaction-history-tab">
									<div class="transaction-content">
										<div class="transaction-type">
										<div class="transaction-type__single decrement">
											<div class="transaction-type__single__icon">
											<i class="uil uil-arrow-down"></i>
											</div>
											<div class="transaction-type__single__content">
											<h4 class="transaction-type__single__content__title">Paypal Transfer</h4>
											<p class="transaction-type__single__content__subtitle">November 24th, 2020 at 2:45 AM</p>
											</div>
										</div>
										<div class="transaction-type__single decrement">
											<div class="transaction-type__single__icon">
											<i class="uil uil-arrow-down"></i>
											</div>
											<div class="transaction-type__single__content">
											<h4 class="transaction-type__single__content__title">Upgrade Storage Plan</h4>
											<p class="transaction-type__single__content__subtitle">November 24th, 2020 at 2:45 AM</p>
											</div>
										</div>
										<div class="transaction-type__single increment">
											<div class="transaction-type__single__icon">
											<i class="uil uil-arrow-up"></i>
											</div>
											<div class="transaction-type__single__content">
											<h4 class="transaction-type__single__content__title">Bank Transfer</h4>
											<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
											</div>
										</div>
										<div class="transaction-type__single decrement">
											<div class="transaction-type__single__icon">
											<i class="uil uil-arrow-down"></i>
											</div>
											<div class="transaction-type__single__content">
											<h4 class="transaction-type__single__content__title">Youtube Monthly Subcrition</h4>
											<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
											</div>
										</div>
										<div class="transaction-type__single increment">
											<div class="transaction-type__single__icon">
											<i class="uil uil-arrow-up"></i>
											</div>
											<div class="transaction-type__single__content">
											<h4 class="transaction-type__single__content__title">Bank Transfer</h4>
											<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
											</div>
										</div>
										</div>
										<div class="transaction-type">
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/avatar/t1.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Thomas Edison</h4>
													<p class="transaction-type__single__content__subtitle">@thomasedis</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="decrement">- $98.21</span>
												</div>
											</div>
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/icon/dropbox.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Dropbox</h4>
													<p class="transaction-type__single__content__subtitle">November</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="increment">+ $200</span>
												</div>
											</div>
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/avatar/t2.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Louis Khun</h4>
													<p class="transaction-type__single__content__subtitle">@thomasedis</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="increment">+ $500</span>
												</div>
											</div>
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/icon/youtube.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Youtube</h4>
													<p class="transaction-type__single__content__subtitle">September</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="decrement">- $200</span>
												</div>
											</div>
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/avatar/t3.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Isabella Sirait</h4>
													<p class="transaction-type__single__content__subtitle">@thomasedis</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="increment">+ $500</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="transaction-upcoming-content" role="tabpanel" aria-labelledby="transaction-upcoming-tab">
									<div class="transaction-content">
										<div class="transaction-type">
											<div class="transaction-type__single increment">
												<div class="transaction-type__single__icon">
													<i class="uil uil-arrow-up"></i>
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Bank Transfer</h4>
													<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
												</div>
											</div>
											<div class="transaction-type__single decrement">
												<div class="transaction-type__single__icon">
													<i class="uil uil-arrow-down"></i>
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Youtube Monthly Subcrition</h4>
													<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
												</div>
											</div>
											<div class="transaction-type__single increment">
												<div class="transaction-type__single__icon">
													<i class="uil uil-arrow-up"></i>
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Bank Transfer</h4>
													<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
												</div>
											</div>
											<div class="transaction-type__single decrement">
												<div class="transaction-type__single__icon">
													<i class="uil uil-arrow-down"></i>
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Paypal Transfer</h4>
													<p class="transaction-type__single__content__subtitle">November 24th, 2020 at 2:45 AM</p>
												</div>
											</div>
											<div class="transaction-type__single decrement">
												<div class="transaction-type__single__icon">
													<i class="uil uil-arrow-down"></i>
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Upgrade Storage Plan</h4>
													<p class="transaction-type__single__content__subtitle">November 24th, 2020 at 2:45 AM</p>
												</div>
											</div>
										</div>
										<div class="transaction-type">
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/avatar/t1.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Thomas Edison</h4>
													<p class="transaction-type__single__content__subtitle">@thomasedis</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="decrement">- $98.21</span>
												</div>
											</div>
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/icon/dropbox.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Dropbox</h4>
													<p class="transaction-type__single__content__subtitle">November</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="increment">+ $200</span>
												</div>
											</div>
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/avatar/t2.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Louis Khun</h4>
													<p class="transaction-type__single__content__subtitle">@thomasedis</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="increment">+ $500</span>
												</div>
											</div>
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/icon/youtube.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Youtube</h4>
													<p class="transaction-type__single__content__subtitle">September</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="decrement">- $200</span>
												</div>
											</div>
											<div class="transaction-type__single">
												<div class="transaction-type__single__icon">
													<img src="assets/img/avatar/t3.svg" alt="user" />
												</div>
												<div class="transaction-type__single__content">
													<h4 class="transaction-type__single__content__title">Isabella Sirait</h4>
													<p class="transaction-type__single__content__subtitle">@thomasedis</p>
												</div>
												<div class="transaction-type__single__rate">
													<span class="increment">+ $500</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="transaction-request-content" role="tabpanel" aria-labelledby="transaction-request-tab">
								<div class="transaction-content">
									<div class="transaction-type">
										<div class="transaction-type__single increment">
											<div class="transaction-type__single__icon">
												<i class="uil uil-arrow-up"></i>
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Bank Transfer</h4>
												<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
											</div>
										</div>
										<div class="transaction-type__single decrement">
											<div class="transaction-type__single__icon">
												<i class="uil uil-arrow-down"></i>
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Paypal Transfer</h4>
												<p class="transaction-type__single__content__subtitle">November 24th, 2020 at 2:45 AM</p>
											</div>
										</div>
										<div class="transaction-type__single increment">
											<div class="transaction-type__single__icon">
												<i class="uil uil-arrow-up"></i>
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Bank Transfer</h4>
												<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
											</div>
										</div>
										<div class="transaction-type__single decrement">
											<div class="transaction-type__single__icon">
												<i class="uil uil-arrow-down"></i>
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Youtube Monthly Subcrition</h4>
												<p class="transaction-type__single__content__subtitle">September 5th, 2020 at 11:56 AM</p>
											</div>
										</div>
										<div class="transaction-type__single decrement">
											<div class="transaction-type__single__icon">
												<i class="uil uil-arrow-down"></i>
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Upgrade Storage Plan</h4>
												<p class="transaction-type__single__content__subtitle">November 24th, 2020 at 2:45 AM</p>
											</div>
										</div>
									</div>
									<div class="transaction-type">
										<div class="transaction-type__single">
											<div class="transaction-type__single__icon">
												<img src="assets/img/avatar/t2.svg" alt="user" />
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Louis Khun</h4>
												<p class="transaction-type__single__content__subtitle">@thomasedis</p>
											</div>
											<div class="transaction-type__single__rate">
												<span class="increment">+ $500</span>
											</div>
										</div>
										<div class="transaction-type__single">
											<div class="transaction-type__single__icon">
												<img src="assets/img/icon/youtube.svg" alt="user" />
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Youtube</h4>
												<p class="transaction-type__single__content__subtitle">September</p>
											</div>
											<div class="transaction-type__single__rate">
												<span class="decrement">- $200</span>
											</div>
										</div>
										<div class="transaction-type__single">
											<div class="transaction-type__single__icon">
												<img src="assets/img/avatar/t3.svg" alt="user" />
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Isabella Sirait</h4>
												<p class="transaction-type__single__content__subtitle">@thomasedis</p>
											</div>
											<div class="transaction-type__single__rate">
												<span class="increment">+ $500</span>
											</div>
										</div>
										<div class="transaction-type__single">
											<div class="transaction-type__single__icon">
												<img src="assets/img/avatar/t1.svg" alt="user" />
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Thomas Edison</h4>
												<p class="transaction-type__single__content__subtitle">@thomasedis</p>
											</div>
											<div class="transaction-type__single__rate">
												<span class="decrement">- $98.21</span>
											</div>
										</div>
										<div class="transaction-type__single">
											<div class="transaction-type__single__icon">
												<img src="assets/img/icon/dropbox.svg" alt="user" />
											</div>
											<div class="transaction-type__single__content">
												<h4 class="transaction-type__single__content__title">Dropbox</h4>
												<p class="transaction-type__single__content__subtitle">November</p>
											</div>
											<div class="transaction-type__single__rate">
												<span class="increment">+ $200</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="geex-content__section__header__btn">
							<a href="#" class="geex-btn load-more-btn">
								Load More <i class="uil uil-angle-down"></i>
							</a>
						</div>
						</div>
					</div>
				</div>

				<div class="geex-content__widget">
					<div class="geex-content__widget__single mb-20">
						<div class="geex-content__widget__single__mastercard">
							<div class="geex-content__widget__single__mastercard__top">
								<div class="single-content mb-30">
									<div class="geex-content__widget__single__mastercard__top__content">
										<p class="geex-content__widget__single__mastercard__top__subtitle">Your Balance</p>
										<h2 class="geex-content__widget__single__mastercard__top__title">$ 9,425</h2>
									</div>
									<div class="geex-content__widget__single__mastercard__top__icon">
										<a href="#">
											<i class="uil uil-ellipsis-h"></i>
										</a>
									</div>
								</div>
								<div class="single-content">
									<div class="geex-content__widget__single__mastercard__top__content">
										<span>2451 **** **** ****</span>
									</div>
									<div class="geex-content__widget__single__mastercard__top__date">
										<span>02/21</span>
									</div>
								</div>
							</div>

							<div class="geex-content__widget__single__mastercard__bottom single-content">
								<div class="geex-content__widget__single__mastercard__bottom__content">
									<p class="geex-content__widget__single__mastercard__bottom__subtitle">Name</p>
									<h2 class="geex-content__widget__single__mastercard__bottom__title">David Bekam</h2>
								</div>
								<div class="geex-content__widget__single__mastercard__bottom__icon">
									<img src="assets/img/icon/mastercard-icon.svg" alt="mastercard" />
									<span class="card-name">Mastersef</span>
								</div>
							</div>
						</div>
					</div>

					<div class="geex-content__widget__single mb-20">
						<div class="geex-content__widget__single__header">
							<h4 class="geex-content__widget__single__title">Recent Transfer</h4>
							<p class="geex-content__widget__single__subtitle">Maiores dicta atque dolorem temporibus </p>
						</div>
						<div class="geex-content__widget__single__content">
							<ul class="geex-content__widget__single__transfer-img">
								<li class="geex-content__widget__single__transfer-img__single trending">
									<a href="#" class="geex-content__widget__single__transfer-img__link">
										<img src="assets/img/avatar/t1.svg" alt="user" />
									</a>
								</li>
								<li class="geex-content__widget__single__transfer-img__single transparent">
								<a href="#" class="geex-content__widget__single__transfer-img__link">
									<img src="assets/img/avatar/t2.svg" alt="user" />
								</a>
								</li>
								<li class="geex-content__widget__single__transfer-img__single trending">
								<a href="#" class="geex-content__widget__single__transfer-img__link">
									<img src="assets/img/avatar/t3.svg" alt="user" />
								</a>
								</li>
								<li class="geex-content__widget__single__transfer-img__single">
								<a href="#" class="geex-content__widget__single__transfer-img__link">
									<i class="uil uil-navigator"></i>
								</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="geex-content__widget__single">
						<div class="geex-content__widget__single__header">
							<h4 class="geex-content__widget__single__title">Spending Categories</h4>
							<p class="geex-content__widget__single__subtitle">Maiores dicta atque dolorem temporibus</p>
						</div>
						<div class="geex-content__widget__single__content">
							<div class="geex-content__widget__single__progress primary mb-30">
								<div class="geex-content__widget__single__progress__icon">
									<i class="uil uil-info-circle"></i>
								</div>
								<div class="geex-content__widget__single__progress__text">
									<h4 class="geex-content__widget__single__progress__title">Installment</h4>
									<div class="geex-content__widget__single__progressbar">
										<div class="geex-content__widget__single__progressbar__inner" style="width: 80%;"></div>
									</div>
									<p class="geex-content__widget__single__progress__subtitle"><span>$ 420.26 Used</span> /from $ 1,000</p>
								</div>
							</div>
							<div class="geex-content__widget__single__progress success mb-30">
								<div class="geex-content__widget__single__progress__icon">
									<i class="uil uil-info-circle"></i>
								</div>
								<div class="geex-content__widget__single__progress__text">
									<h4 class="geex-content__widget__single__progress__title">Restaurant</h4>
									<div class="geex-content__widget__single__progressbar">
										<div class="geex-content__widget__single__progressbar__inner" style="width: 80%;"></div>
									</div>
									<p class="geex-content__widget__single__progress__subtitle"><span>$ 420.26 Used</span> /from $ 1,000</p>
								</div>
							</div>
							<div class="geex-content__widget__single__progress warning mb-30">
								<div class="geex-content__widget__single__progress__icon">
									<i class="uil uil-info-circle"></i>
								</div>
								<div class="geex-content__widget__single__progress__text">
									<h4 class="geex-content__widget__single__progress__title">Transport</h4>
									<div class="geex-content__widget__single__progressbar">
										<div class="geex-content__widget__single__progressbar__inner" style="width: 65%;"></div>
									</div>
									<p class="geex-content__widget__single__progress__subtitle"><span>$ 420.26 Used</span> /from $ 1,000</p>
								</div>
							</div>
							<div class="geex-content__widget__single__progress info mb-30">
								<div class="geex-content__widget__single__progress__icon">
									<i class="uil uil-info-circle"></i>
								</div>
								<div class="geex-content__widget__single__progress__text">
									<h4 class="geex-content__widget__single__progress__title">Holiday</h4>
									<div class="geex-content__widget__single__progressbar">
										<div class="geex-content__widget__single__progressbar__inner" style="width: 70%;"></div>
									</div>
									<p class="geex-content__widget__single__progress__subtitle"><span>$ 420.26 Used</span> /from $ 1,000</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</main>

	<!-- inject:js-->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
	<?php include './partials/script.php'?>
  	<!-- endinject-->
</body>

</html>