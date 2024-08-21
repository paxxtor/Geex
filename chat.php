<!doctype html>
<html lang="en" dir="ltr">

<?php $title='Chat' ?>

<?php include './partials/head.php' ?>

<body class="geex-dashboard">
	
<?php include './partials/header.php'?>

<main class="geex-main-content">
		
<?php include './partials/sidebar.php'?>
	
<?php include './partials/customizer.php'?>

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">Chat</h2>
					<p class="geex-content__header__subtitle">Form Elements is used to style and format the input field</p>
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
					<div class="geex-content__section geex-content__section--transparent geex-content__chat">
						<button class="geex-btn geex-content__chat__toggle">
							<i class="uil-bars"></i> Chat List
						</button>

						<div class="geex-content__chat__sidebar">
							<div class="geex-content__chat__sidebar__searchform">
								<div class="geex-content__chat__sidebar__searchform__search">
									<input type="text" placeholder="Search" class="geex-content__header__btn" />
									<i class="uil uil-search"></i>
								</div>
								<button class="geex-content__chat__sidebar__searchform__btn">
									<i class="uil-plus"></i>
								</button>
							</div>

							<ul class="nav nav-tabs geex-content__chat__sidebar__tab mb-20" role="tablist">
								<span class="geex-content__chat__sidebar__tab__title">Pinned Message</span>
								<li class="nav-item" role="presentation">
									<a href="#" class="nav-link unread active" id="geex-chat-tab-1" data-bs-toggle="tab" data-bs-target="#geex-chat-content-1" type="button" role="tab" aria-controls="geex-chat-content-1" aria-selected="true">
										<div class="geex-chat-tab-single">
											<div class="geex-chat-tab-single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="geex-chat-tab-single__status"></span>
											</div>
											<div class="geex-chat-tab-single__content">
												<div class="geex-chat-tab-single__message"> 
													<h4 class="geex-chat-tab-single__title">Robert Johanson</h4>
													<span class="geex-chat-tab-single__subtitle">Hi David, can you send your...</span>
												</div>
												<div class="geex-chat-tab-single__info">
													<span class="geex-chat-tab-single__info__time">2min ago</span>
													<span class="geex-chat-tab-single__info__count">2</span>
												</div>
											</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="#" class="nav-link" id="geex-chat-tab-2" data-bs-toggle="tab" data-bs-target="#geex-chat-content-2" type="button" role="tab" aria-controls="geex-chat-content-2" aria-selected="true">
										<div class="geex-chat-tab-single">
											<div class="geex-chat-tab-single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="geex-chat-tab-single__status active"></span>
											</div>
											<div class="geex-chat-tab-single__content">
												<div class="geex-chat-tab-single__message"> 
													<h4 class="geex-chat-tab-single__title">Robert Johanson</h4>
													<span class="geex-chat-tab-single__subtitle">Hi David, can you send your...</span>
												</div>
												<div class="geex-chat-tab-single__info">
													<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M23.6181 4.46941C23.4111 4.23957 23.1213 4.10135 22.8124 4.08517C22.5034 4.06898 22.2007 4.17613 21.9708 4.38308L11.1266 14.1422L6.07615 9.09175C5.96853 8.98032 5.83979 8.89144 5.69745 8.83029C5.55512 8.76915 5.40203 8.73697 5.24712 8.73562C5.09221 8.73427 4.93858 8.76379 4.7952 8.82245C4.65182 8.88111 4.52156 8.96774 4.41202 9.07729C4.30248 9.18683 4.21585 9.31709 4.15719 9.46047C4.09853 9.60385 4.06901 9.75747 4.07036 9.91238C4.0717 10.0673 4.10389 10.2204 4.16503 10.3627C4.22617 10.5051 4.31505 10.6338 4.42648 10.7414L10.2598 16.5747C10.4711 16.786 10.7554 16.9081 11.0541 16.9159C11.3528 16.9237 11.6431 16.8166 11.8651 16.6167L23.5318 6.11675C23.7617 5.90971 23.8999 5.61987 23.9161 5.31095C23.9323 5.00204 23.8251 4.69934 23.6181 4.46941Z" fill="#A3A3A3"/>
													<path d="M21.9695 11.3831L11.1253 21.1423L6.07482 16.0918C5.85478 15.8793 5.56008 15.7617 5.25419 15.7644C4.94829 15.767 4.65567 15.8897 4.43937 16.106C4.22306 16.3223 4.10036 16.6149 4.0977 16.9208C4.09504 17.2267 4.21264 17.5214 4.42515 17.7415L10.2585 23.5748C10.4698 23.786 10.7541 23.9082 11.0528 23.916C11.3515 23.9238 11.6418 23.8167 11.8638 23.6168L23.5305 13.1168C23.7534 12.908 23.8855 12.6201 23.8985 12.3149C23.9114 12.0098 23.8042 11.7117 23.5999 11.4847C23.3955 11.2578 23.1103 11.12 22.8054 11.101C22.5006 11.082 22.2005 11.1833 21.9695 11.3831Z" fill="#A3A3A3"/>
													</svg>                            
												</div>
											</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="#" class="nav-link unread" id="geex-chat-tab-3" data-bs-toggle="tab" data-bs-target="#geex-chat-content-3" type="button" role="tab" aria-controls="geex-chat-task-3" aria-selected="true">
										<div class="geex-chat-tab-single">
											<div class="geex-chat-tab-single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="geex-chat-tab-single__status"></span>
											</div>
											<div class="geex-chat-tab-single__content">
												<div class="geex-chat-tab-single__message"> 
													<h4 class="geex-chat-tab-single__title">Chloe Jess</h4>
													<span class="geex-chat-tab-single__subtitle">I have done my task last week..</span>
												</div>
												<div class="geex-chat-tab-single__info">
													<span class="geex-chat-tab-single__info__time">27 ago</span>
													<span class="geex-chat-tab-single__info__count">48</span>
												</div>
											</div>
										</div>
									</a>
								</li>
							</ul>

							<ul class="nav nav-tabs geex-content__chat__sidebar__tab mb-20" role="tablist">
								<span class="geex-content__chat__sidebar__tab__title">Recent Message</span>
								<li class="nav-item" role="presentation">
									<a href="#" class="nav-link unread" id="geex-chat-tab-4" data-bs-toggle="tab" data-bs-target="#geex-chat-content-4" type="button" role="tab" aria-controls="geex-chat-content-4" aria-selected="true">
										<div class="geex-chat-tab-single">
											<div class="geex-chat-tab-single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="geex-chat-tab-single__status"></span>
											</div>
											<div class="geex-chat-tab-single__content">
												<div class="geex-chat-tab-single__message"> 
													<h4 class="geex-chat-tab-single__title">Robert Johanson</h4>
													<span class="geex-chat-tab-single__subtitle">Hi David, can you send your...</span>
												</div>
												<div class="geex-chat-tab-single__info">
													<span class="geex-chat-tab-single__info__time">2min ago</span>
													<span class="geex-chat-tab-single__info__count">2</span>
												</div>
											</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="#" class="nav-link" id="geex-chat-tab-5" data-bs-toggle="tab" data-bs-target="#geex-chat-content-5" type="button" role="tab" aria-controls="geex-chat-content-5" aria-selected="true">
										<div class="geex-chat-tab-single">
											<div class="geex-chat-tab-single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="geex-chat-tab-single__status active"></span>
											</div>
											<div class="geex-chat-tab-single__content">
												<div class="geex-chat-tab-single__message"> 
													<h4 class="geex-chat-tab-single__title">Robert Johanson</h4>
													<span class="geex-chat-tab-single__subtitle">Hi David, can you send your...</span>
												</div>
												<div class="geex-chat-tab-single__info">
													<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M23.6181 4.46941C23.4111 4.23957 23.1213 4.10135 22.8124 4.08517C22.5034 4.06898 22.2007 4.17613 21.9708 4.38308L11.1266 14.1422L6.07615 9.09175C5.96853 8.98032 5.83979 8.89144 5.69745 8.83029C5.55512 8.76915 5.40203 8.73697 5.24712 8.73562C5.09221 8.73427 4.93858 8.76379 4.7952 8.82245C4.65182 8.88111 4.52156 8.96774 4.41202 9.07729C4.30248 9.18683 4.21585 9.31709 4.15719 9.46047C4.09853 9.60385 4.06901 9.75747 4.07036 9.91238C4.0717 10.0673 4.10389 10.2204 4.16503 10.3627C4.22617 10.5051 4.31505 10.6338 4.42648 10.7414L10.2598 16.5747C10.4711 16.786 10.7554 16.9081 11.0541 16.9159C11.3528 16.9237 11.6431 16.8166 11.8651 16.6167L23.5318 6.11675C23.7617 5.90971 23.8999 5.61987 23.9161 5.31095C23.9323 5.00204 23.8251 4.69934 23.6181 4.46941Z" fill="#A3A3A3"/>
													<path d="M21.9695 11.3831L11.1253 21.1423L6.07482 16.0918C5.85478 15.8793 5.56008 15.7617 5.25419 15.7644C4.94829 15.767 4.65567 15.8897 4.43937 16.106C4.22306 16.3223 4.10036 16.6149 4.0977 16.9208C4.09504 17.2267 4.21264 17.5214 4.42515 17.7415L10.2585 23.5748C10.4698 23.786 10.7541 23.9082 11.0528 23.916C11.3515 23.9238 11.6418 23.8167 11.8638 23.6168L23.5305 13.1168C23.7534 12.908 23.8855 12.6201 23.8985 12.3149C23.9114 12.0098 23.8042 11.7117 23.5999 11.4847C23.3955 11.2578 23.1103 11.12 22.8054 11.101C22.5006 11.082 22.2005 11.1833 21.9695 11.3831Z" fill="#A3A3A3"/>
													</svg>                            
												</div>
											</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a href="#" class="nav-link unread" id="geex-chat-tab-6" data-bs-toggle="tab" data-bs-target="#geex-chat-content-6" type="button" role="tab" aria-controls="geex-chat-content-6" aria-selected="true">
										<div class="geex-chat-tab-single">
											<div class="geex-chat-tab-single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="geex-chat-tab-single__status"></span>
											</div>
											<div class="geex-chat-tab-single__content">
												<div class="geex-chat-tab-single__message"> 
													<h4 class="geex-chat-tab-single__title">Chloe Jess</h4>
													<span class="geex-chat-tab-single__subtitle">I have done my task last week..</span>
												</div>
												<div class="geex-chat-tab-single__info">
													<span class="geex-chat-tab-single__info__time">27 ago</span>
													<span class="geex-chat-tab-single__info__count">48</span>
												</div>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>

						<div class="tab-content geex-content__chat__content">
							<div class="tab-pane fade show active" id="geex-chat-content-1" role="tabpanel" aria-labelledby="geex-chat-tab-1">
								<div class="geex-content__chat__content">
									<div class="geex-content__chat__header">
										<div class="geex-content__chat__header__img">
											<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
										</div>
										<div class="geex-content__chat__header__content">
											<div class="geex-content__chat__header__text">
												<h4 class="geex-content__chat__header__title">Robert Johanson</h4>
												<span class="geex-content__chat__header__subtitle">
													<i class="uil-users-alt"></i>24 Members
												</span>
											</div>
											<ul class="geex-content__chat__header__filter">
												<li>
													<a href="#" class="geex-content__chat__header__filter__mute-btn">
													<i class="uil-bell-slash"></i>
													</a>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-search"></i>
													</a>
													<div class="geex-content__chat__header__filter__content geex-content__header__searchform">
														<input type="text" placeholder="Search" class="geex-content__header__btn">
														<i class="uil uil-search"></i>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-info-circle"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">Status: <span>Active</span><span class="status-icon"></span></li>
															<li class="geex-content__chat__header__filter__content__list__item">Name: <a href="#" class="geex-content__chat__header__filter__content__list__link">James Cameron</a></li>
															<li class="geex-content__chat__header__filter__content__list__item">Email: <a href="#" class="geex-content__chat__header__filter__content__list__link">james@cameron.com</a></li>
														</ul>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-ellipsis-v"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Mute Notification</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Background</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Emoji</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Block User</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</div>
					
									<div class="geex-content__chat__list">
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Ria Tamaguchi</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Hi <a href="#">@chloe</a>, I agree with that schedule. I have accepted your meeting inviataition</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">David Bekam</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
									</div>
					
									<div class="geex-content__chat__send">
										<div class="geex-content__chat__send__input">
											<input placeholder="Type your message..." name="chat" id="chat" value="">
										</div>
										<div class="geex-content__chat__send__action">
											<div class="geex-content__chat__action__toggle__content">
												<div class="geex-content__chat__send__action__wrap">
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-camera"></i>
													</div>
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-link"></i>
													</div>
												</div>
											</div>
											<button class="geex-btn geex-content__chat__action__toggle__btn">
												<i class="uil-ellipsis-h"></i>
											</button>
											<button type="submit" class="btn-send">
												<i class="uil uil-message"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="geex-chat-content-2" role="tabpanel" aria-labelledby="geex-chat-tab-2">
								<div class="geex-content__chat__content">
									<div class="geex-content__chat__header">
										<div class="geex-content__chat__header__img">
											<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
										</div>
										<div class="geex-content__chat__header__content">
											<div class="geex-content__chat__header__text">
												<h4 class="geex-content__chat__header__title">Robert Johanson</h4>
												<span class="geex-content__chat__header__subtitle">
													<i class="uil-users-alt"></i>24 Members
												</span>
											</div>
											<ul class="geex-content__chat__header__filter">
												<li>
													<a href="#" class="geex-content__chat__header__filter__mute-btn">
													<i class="uil-bell-slash"></i>
													</a>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-search"></i>
													</a>
													<div class="geex-content__chat__header__filter__content geex-content__header__searchform">
														<input type="text" placeholder="Search" class="geex-content__header__btn">
														<i class="uil uil-search"></i>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-info-circle"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">Status: <span>Active</span><span class="status-icon"></span></li>
															<li class="geex-content__chat__header__filter__content__list__item">Name: <a href="#" class="geex-content__chat__header__filter__content__list__link">James Cameron</a></li>
															<li class="geex-content__chat__header__filter__content__list__item">Email: <a href="#" class="geex-content__chat__header__filter__content__list__link">james@cameron.com</a></li>
														</ul>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-ellipsis-v"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Mute Notification</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Background</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Emoji</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Block User</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</div>
					
									<div class="geex-content__chat__list">
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Ria Tamaguchi</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
												</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Hi <a href="#">@chloe</a>, I agree with that schedule. I have accepted your meeting inviataition</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">David Bekam</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
									</div>
					
									<div class="geex-content__chat__send">
										<div class="geex-content__chat__send__input">
											<input placeholder="Type your message..." name="chat" id="chat" value="">
										</div>
										<div class="geex-content__chat__send__action">
											<div class="geex-content__chat__action__toggle__content">
												<div class="geex-content__chat__send__action__wrap">
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-camera"></i>
													</div>
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-link"></i>
													</div>
												</div>
											</div>
											<button class="geex-btn geex-content__chat__action__toggle__btn">
												<i class="uil-ellipsis-h"></i>
											</button>
											<button type="submit" class="btn-send">
												<i class="uil uil-message"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="geex-chat-content-3" role="tabpanel" aria-labelledby="geex-chat-tab-3">
								<div class="geex-content__chat__content">
									<div class="geex-content__chat__header">
										<div class="geex-content__chat__header__img">
											<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
										</div>
										<div class="geex-content__chat__header__content">
											<div class="geex-content__chat__header__text">
												<h4 class="geex-content__chat__header__title">Robert Johanson</h4>
												<span class="geex-content__chat__header__subtitle">
													<i class="uil-users-alt"></i>24 Members
												</span>
											</div>
											<ul class="geex-content__chat__header__filter">
												<li>
													<a href="#" class="geex-content__chat__header__filter__mute-btn">
													<i class="uil-bell-slash"></i>
													</a>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-search"></i>
													</a>
													<div class="geex-content__chat__header__filter__content geex-content__header__searchform">
														<input type="text" placeholder="Search" class="geex-content__header__btn">
														<i class="uil uil-search"></i>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-info-circle"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">Status: <span>Active</span><span class="status-icon"></span></li>
															<li class="geex-content__chat__header__filter__content__list__item">Name: <a href="#" class="geex-content__chat__header__filter__content__list__link">James Cameron</a></li>
															<li class="geex-content__chat__header__filter__content__list__item">Email: <a href="#" class="geex-content__chat__header__filter__content__list__link">james@cameron.com</a></li>
														</ul>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-ellipsis-v"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Mute Notification</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Background</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Emoji</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Block User</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</div>
					
									<div class="geex-content__chat__list">
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Ria Tamaguchi</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Hi <a href="#">@chloe</a>, I agree with that schedule. I have accepted your meeting inviataition</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">David Bekam</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
									</div>
					
									<div class="geex-content__chat__send">
										<div class="geex-content__chat__send__input">
											<input placeholder="Type your message..." name="chat" id="chat" value="">
										</div>
										<div class="geex-content__chat__send__action">
											<div class="geex-content__chat__action__toggle__content">
												<div class="geex-content__chat__send__action__wrap">
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-camera"></i>
													</div>
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-link"></i>
													</div>
												</div>
											</div>
											<button class="geex-btn geex-content__chat__action__toggle__btn">
												<i class="uil-ellipsis-h"></i>
											</button>
											<button type="submit" class="btn-send">
												<i class="uil uil-message"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="geex-chat-content-4" role="tabpanel" aria-labelledby="geex-chat-tab-4">
								<div class="geex-content__chat__content">
									<div class="geex-content__chat__header">
										<div class="geex-content__chat__header__img">
											<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
										</div>
										<div class="geex-content__chat__header__content">
											<div class="geex-content__chat__header__text">
												<h4 class="geex-content__chat__header__title">Robert Johanson</h4>
												<span class="geex-content__chat__header__subtitle">
													<i class="uil-users-alt"></i>24 Members
												</span>
											</div>
											<ul class="geex-content__chat__header__filter">
												<li>
													<a href="#" class="geex-content__chat__header__filter__mute-btn">
													<i class="uil-bell-slash"></i>
													</a>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-search"></i>
													</a>
													<div class="geex-content__chat__header__filter__content geex-content__header__searchform">
														<input type="text" placeholder="Search" class="geex-content__header__btn">
														<i class="uil uil-search"></i>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-info-circle"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">Status: <span>Active</span><span class="status-icon"></span></li>
															<li class="geex-content__chat__header__filter__content__list__item">Name: <a href="#" class="geex-content__chat__header__filter__content__list__link">James Cameron</a></li>
															<li class="geex-content__chat__header__filter__content__list__item">Email: <a href="#" class="geex-content__chat__header__filter__content__list__link">james@cameron.com</a></li>
														</ul>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-ellipsis-v"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Mute Notification</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Background</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Emoji</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Block User</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</div>
					
									<div class="geex-content__chat__list">
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Ria Tamaguchi</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Hi <a href="#">@chloe</a>, I agree with that schedule. I have accepted your meeting inviataition</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">David Bekam</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
									</div>
					
									<div class="geex-content__chat__send">
										<div class="geex-content__chat__send__input">
											<input placeholder="Type your message..." name="chat" id="chat" value="">
										</div>
										<div class="geex-content__chat__send__action">
											<div class="geex-content__chat__action__toggle__content">
												<div class="geex-content__chat__send__action__wrap">
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-camera"></i>
													</div>
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-link"></i>
													</div>
												</div>
											</div>
											<button class="geex-btn geex-content__chat__action__toggle__btn">
												<i class="uil-ellipsis-h"></i>
											</button>
											<button type="submit" class="btn-send">
												<i class="uil uil-message"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="geex-chat-content-5" role="tabpanel" aria-labelledby="geex-chat-tab-5">
								<div class="geex-content__chat__content">
									<div class="geex-content__chat__header">
										<div class="geex-content__chat__header__img">
											<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
										</div>
										<div class="geex-content__chat__header__content">
											<div class="geex-content__chat__header__text">
												<h4 class="geex-content__chat__header__title">Robert Johanson</h4>
												<span class="geex-content__chat__header__subtitle">
													<i class="uil-users-alt"></i>24 Members
												</span>
											</div>
											<ul class="geex-content__chat__header__filter">
												<li>
													<a href="#" class="geex-content__chat__header__filter__mute-btn">
													<i class="uil-bell-slash"></i>
													</a>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-search"></i>
													</a>
													<div class="geex-content__chat__header__filter__content geex-content__header__searchform">
														<input type="text" placeholder="Search" class="geex-content__header__btn">
														<i class="uil uil-search"></i>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-info-circle"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">Status: <span>Active</span><span class="status-icon"></span></li>
															<li class="geex-content__chat__header__filter__content__list__item">Name: <a href="#" class="geex-content__chat__header__filter__content__list__link">James Cameron</a></li>
															<li class="geex-content__chat__header__filter__content__list__item">Email: <a href="#" class="geex-content__chat__header__filter__content__list__link">james@cameron.com</a></li>
														</ul>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-ellipsis-v"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Mute Notification</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Background</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Emoji</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Block User</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</div>
					
									<div class="geex-content__chat__list">
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Ria Tamaguchi</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Hi <a href="#">@chloe</a>, I agree with that schedule. I have accepted your meeting inviataition</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">David Bekam</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
									</div>
					
									<div class="geex-content__chat__send">
										<div class="geex-content__chat__send__input">
											<input placeholder="Type your message..." name="chat" id="chat" value="">
										</div>
										<div class="geex-content__chat__send__action">
											<div class="geex-content__chat__action__toggle__content">
												<div class="geex-content__chat__send__action__wrap">
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-camera"></i>
													</div>
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-link"></i>
													</div>
												</div>
											</div>
											<button class="geex-btn geex-content__chat__action__toggle__btn">
												<i class="uil-ellipsis-h"></i>
											</button>
											<button type="submit" class="btn-send">
												<i class="uil uil-message"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="geex-chat-content-6" role="tabpanel" aria-labelledby="geex-chat-tab-6">
								<div class="geex-content__chat__content">
									<div class="geex-content__chat__header">
										<div class="geex-content__chat__header__img">
											<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
										</div>
										<div class="geex-content__chat__header__content">
											<div class="geex-content__chat__header__text">
											<h4 class="geex-content__chat__header__title">Robert Johanson</h4>
											<span class="geex-content__chat__header__subtitle">
												<i class="uil-users-alt"></i>24 Members
											</span>
											</div>
											<ul class="geex-content__chat__header__filter">
												<li>
													<a href="#" class="geex-content__chat__header__filter__mute-btn">
													<i class="uil-bell-slash"></i>
													</a>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-search"></i>
													</a>
													<div class="geex-content__chat__header__filter__content geex-content__header__searchform">
														<input type="text" placeholder="Search" class="geex-content__header__btn">
														<i class="uil uil-search"></i>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-info-circle"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">Status: <span>Active</span><span class="status-icon"></span></li>
															<li class="geex-content__chat__header__filter__content__list__item">Name: <a href="#" class="geex-content__chat__header__filter__content__list__link">James Cameron</a></li>
															<li class="geex-content__chat__header__filter__content__list__item">Email: <a href="#" class="geex-content__chat__header__filter__content__list__link">james@cameron.com</a></li>
														</ul>
													</div>
												</li>
												<li>
													<a href="#" class="geex-content__chat__header__filter__btn">
														<i class="uil-ellipsis-v"></i>
													</a>
													<div class="geex-content__chat__header__filter__content">
														<ul class="geex-content__chat__header__filter__content__list">
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Mute Notification</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Background</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Change Emoji</a>
															</li>
															<li class="geex-content__chat__header__filter__content__list__item">
																<a href="#" class="geex-content__chat__header__filter__content__list__link">Block User</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</div>
					
									<div class="geex-content__chat__list">
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Ria Tamaguchi</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Hi <a href="#">@chloe</a>, I agree with that schedule. I have accepted your meeting inviataition</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">David Bekam</span>
												<span class="geex-content__chat__list__single__msg">Hi everyone! Let’s start our discussion now about kick off meeting next week.</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
						
										<div class="geex-content__chat__list__single active">
											<div class="geex-content__chat__list__single__img">
												<img src="assets/img/avatar/chat/1.svg" alt="avatar" />
												<span class="active"></span>
											</div>
											<div class="geex-content__chat__list__single__text">
												<span class="geex-content__chat__list__single__title">Joe Takeshi</span>
												<span class="geex-content__chat__list__single__msg latest">Is everyone ok about that schedule?</span>
											</div>
										</div>
									</div>
					
									<div class="geex-content__chat__send">
										<div class="geex-content__chat__send__input">
											<input placeholder="Type your message..." name="chat" id="chat" value="">
										</div>
										<div class="geex-content__chat__send__action">
											<div class="geex-content__chat__action__toggle__content">
												<div class="geex-content__chat__send__action__wrap">
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-camera"></i>
													</div>
													<div class="geex-content__chat__send__action__single">
														<input type="file">
														<i class="uil uil-link"></i>
													</div>
												</div>
											</div>
											<button class="geex-btn geex-content__chat__action__toggle__btn">
												<i class="uil-ellipsis-h"></i>
											</button>
											<button type="submit" class="btn-send">
												<i class="uil uil-message"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

  <!-- inject:js-->

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <?php include './partials/script.php'?>
  
  <!-- endinject-->
</body>

</html>