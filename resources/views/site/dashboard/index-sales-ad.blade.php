<section id="main-dashboard" class="flex-box flex-justify-space" style="align-items: normal;">
    <livewire:site.dashboard.sidebar />

    <section id="left-dashboard">
        <div class="box-header-dash-comments box-header-dash-comments-sale-ad flex-box flex-justify-space">
            <div class="d-flex h-full">
                <div class="item-header-dash-comments header-dash-comments-active flex-box">
                    <span>آگهی های من</span>
                </div>

                <div class="item-header-dash-comments flex-box">
                    <span>آگهی های مورد علاقه</span>
                </div>
            </div>

            <div>
                <a href="{{ route('dashboard.sales-ad.create', ['create']) }}"
                    class="btn-add-ticket-dashboard h-10 px-4 d-flex justify-content-center align-items-center">
                    <span class="d-flex">ثبت آگهی  <span class="hide-item-pc mr-2">جدید</span> </span>
                </a>
            </div>
        </div>

        <div class="box-message-dash-comments">
            <div class="item-message-dash-comments">
                <div
                    class="w-full h-full mt-10 pt-10 d-flex flex-column justify-content-center align-items-center hidden">
                    <div>
                        <img src="https://farsgamer.com/media/667c3740d0e40.png" alt="">
                    </div>

                    <div class="mt-4">
                        <p>متاسفانه هیچی آگهی ثبت نکردی ! </p>
                    </div>
                </div>

                <div class="box-tickets hide-item-pc">
                    <table class="table-tickets-dashboard">
                        <thead>
                            <tr>
                                <th></th>

                                <th style="width: 25%">نام آگهی ثبت شده</th>

                                <th>تاریخ</th>

                                <th>شماره آگهی</th>

                                <th>دسته بندی</th>

                                <th>قیمت</th>

                                <th>وضعیت</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr class="box-sale-ad-dashboard">
                                <td class="img">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </td>

                                <td>اکانت فورت</td>

                                <td>3 روز پیش</td>

                                <td>12312423</td>

                                <td>فورتنایت</td>

                                <td>200000 تومان</td>

                                <td class="color-green">تایید شده</td>

                                <td class="d-flex flex-column justify-content-center aling-items-center">
                                    <a href="#" class="btn-remove-sale-add-dashboard">حذف</a>

                                    <a href="#" class="btn-edit-sale-add-dashboard">ویرایش</a>

                                    <a href="#" class="btn-open-sale-add-dashboard">مشاهده آگهی</a>
                                </td>
                            </tr>

                            <tr class="box-sale-ad-dashboard">
                                <td class="img min-w-10">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </td>

                                <td>اکانت فورت</td>

                                <td>3 روز پیش</td>

                                <td>12312423</td>

                                <td>فورتنایت</td>

                                <td>200000 تومان</td>

                                <td class="color-green">تایید شده</td>

                                <td class="d-flex flex-column justify-content-center aling-items-center">
                                    <a href="#" class="btn-remove-sale-add-dashboard">حذف</a>

                                    <a href="#" class="btn-edit-sale-add-dashboard">ویرایش</a>

                                    <a href="#" class="btn-open-sale-add-dashboard">مشاهده آگهی</a>
                                </td>
                            </tr>

                            <tr class="box-sale-ad-dashboard">
                                <td class="img">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </td>

                                <td>اکانت فورت</td>

                                <td>3 روز پیش</td>

                                <td>12312423</td>

                                <td>فورتنایت</td>

                                <td>200000 تومان</td>

                                <td class="color-green">تایید شده</td>

                                <td class="d-flex flex-column justify-content-center aling-items-center">
                                    <a href="#" class="btn-remove-sale-add-dashboard">حذف</a>

                                    <a href="#" class="btn-edit-sale-add-dashboard">ویرایش</a>

                                    <a href="#" class="btn-open-sale-add-dashboard">مشاهده آگهی</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="hide-item-mobile">
                    <div>
                        <div class="box-sale-ad-mobile-my">
                            <div class="header">
                                <div class="img">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </div>

                                <div class="box-title">
                                    <div class="title">
                                        <p>اکانت فورت</p>
                                    </div>

                                    <div class="time">
                                        <p>3 روز پیش</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-sale-ad-mobile-category">
                                <div class="item">
                                    <span>دسته بندی : </span>

                                    <p class="mr-2 text-black"> فورتنایت</p>
                                </div>

                                <div class="item">
                                    <span>قیمت : </span>

                                    <p class="mr-2 text-black"> 123456</p>
                                </div>

                                <div class="item">
                                    <span>شماره  آگهی : </span>

                                    <p class="mr-2 text-black"> 12312312</p>
                                </div>

                                <div class="item">
                                    <span>وضعیت آگهی : </span>

                                    <p class="mr-2 text-success"> تایید شده</p>
                                </div>
                            </div>

                            <div class="box-sale-ad-mobile-btn">
                                <a href="#" class="edit">ویرایش</a>

                                <a href="#" class="remove">حذف</a>
                            </div>

                            <div class="flex-box flex-center mt-4">
                                <a href="#" class="text-primary">مشاهده آگهی</a>
                            </div>
                        </div>

                        <div class="box-sale-ad-mobile-my">
                            <div class="header">
                                <div class="img">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </div>
    
                                <div class="box-title">
                                    <div class="title">
                                        <p>اکانت فورت</p>
                                    </div>
    
                                    <div class="time">
                                        <p>3 روز پیش</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-category">
                                <div class="item">
                                    <span>دسته بندی : </span>
    
                                    <p class="mr-2 text-black"> فورتنایت</p>
                                </div>
    
                                <div class="item">
                                    <span>قیمت : </span>
    
                                    <p class="mr-2 text-black"> 123456</p>
                                </div>
    
                                <div class="item">
                                    <span>شماره آگهی : </span>
    
                                    <p class="mr-2 text-black"> 12312312</p>
                                </div>
    
                                <div class="item">
                                    <span>وضعیت آگهی : </span>
    
                                    <p class="mr-2 text-success"> تایید شده</p>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-btn">
                                <a href="#" class="edit">ویرایش</a>
    
                                <a href="#" class="remove">حذف</a>
                            </div>
    
                            <div class="flex-box flex-center mt-4">
                                <a href="#" class="text-primary">مشاهده آگهی</a>
                            </div>
                        </div>

                        <div class="box-sale-ad-mobile-my">
                            <div class="header">
                                <div class="img">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </div>
    
                                <div class="box-title">
                                    <div class="title">
                                        <p>اکانت فورت</p>
                                    </div>
    
                                    <div class="time">
                                        <p>3 روز پیش</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-category">
                                <div class="item">
                                    <span>دسته بندی : </span>
    
                                    <p class="mr-2 text-black"> فورتنایت</p>
                                </div>
    
                                <div class="item">
                                    <span>قیمت : </span>
    
                                    <p class="mr-2 text-black"> 123456</p>
                                </div>
    
                                <div class="item">
                                    <span>شماره آگهی : </span>
    
                                    <p class="mr-2 text-black"> 12312312</p>
                                </div>
    
                                <div class="item">
                                    <span>وضعیت آگهی : </span>
    
                                    <p class="mr-2 text-success"> تایید شده</p>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-btn">
                                <a href="#" class="edit">ویرایش</a>
    
                                <a href="#" class="remove">حذف</a>
                            </div>
    
                            <div class="flex-box flex-center mt-4">
                                <a href="#" class="text-primary">مشاهده آگهی</a>
                            </div>
                        </div>

                        <div class="box-sale-ad-mobile-my">
                            <div class="header">
                                <div class="img">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </div>
    
                                <div class="box-title">
                                    <div class="title">
                                        <p>اکانت فورت</p>
                                    </div>
    
                                    <div class="time">
                                        <p>3 روز پیش</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-category">
                                <div class="item">
                                    <span>دسته بندی : </span>
    
                                    <p class="mr-2 text-black"> فورتنایت</p>
                                </div>
    
                                <div class="item">
                                    <span>قیمت : </span>
    
                                    <p class="mr-2 text-black"> 123456</p>
                                </div>
    
                                <div class="item">
                                    <span>شماره آگهی : </span>
    
                                    <p class="mr-2 text-black"> 12312312</p>
                                </div>
    
                                <div class="item">
                                    <span>وضعیت آگهی : </span>
    
                                    <p class="mr-2 text-success"> تایید شده</p>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-btn">
                                <a href="#" class="edit">ویرایش</a>
    
                                <a href="#" class="remove">حذف</a>
                            </div>
    
                            <div class="flex-box flex-center mt-4">
                                <a href="#" class="text-primary">مشاهده آگهی</a>
                            </div>
                        </div>

                        <div class="box-sale-ad-mobile-my">
                            <div class="header">
                                <div class="img">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </div>
    
                                <div class="box-title">
                                    <div class="title">
                                        <p>اکانت فورت</p>
                                    </div>
    
                                    <div class="time">
                                        <p>3 روز پیش</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-category">
                                <div class="item">
                                    <span>دسته بندی : </span>
    
                                    <p class="mr-2 text-black"> فورتنایت</p>
                                </div>
    
                                <div class="item">
                                    <span>قیمت : </span>
    
                                    <p class="mr-2 text-black"> 123456</p>
                                </div>
    
                                <div class="item">
                                    <span>شماره آگهی : </span>
    
                                    <p class="mr-2 text-black"> 12312312</p>
                                </div>
    
                                <div class="item">
                                    <span>وضعیت آگهی : </span>
    
                                    <p class="mr-2 text-success"> تایید شده</p>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-btn">
                                <a href="#" class="edit">ویرایش</a>
    
                                <a href="#" class="remove">حذف</a>
                            </div>
    
                            <div class="flex-box flex-center mt-4">
                                <a href="#" class="text-primary">مشاهده آگهی</a>
                            </div>
                        </div>

                        <div class="box-sale-ad-mobile-my">
                            <div class="header">
                                <div class="img">
                                    <img src="https://www.farsgamer.com/media/6651a73a40064.jpg" alt="">
                                </div>
    
                                <div class="box-title">
                                    <div class="title">
                                        <p>اکانت فورت</p>
                                    </div>
    
                                    <div class="time">
                                        <p>3 روز پیش</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-category">
                                <div class="item">
                                    <span>دسته بندی : </span>
    
                                    <p class="mr-2 text-black"> فورتنایت</p>
                                </div>
    
                                <div class="item">
                                    <span>قیمت : </span>
    
                                    <p class="mr-2 text-black"> 123456</p>
                                </div>
    
                                <div class="item">
                                    <span>شماره آگهی : </span>
    
                                    <p class="mr-2 text-black"> 12312312</p>
                                </div>
    
                                <div class="item">
                                    <span>وضعیت آگهی : </span>
    
                                    <p class="mr-2 text-success"> تایید شده</p>
                                </div>
                            </div>
    
                            <div class="box-sale-ad-mobile-btn">
                                <a href="#" class="edit">ویرایش</a>
    
                                <a href="#" class="remove">حذف</a>
                            </div>
    
                            <div class="flex-box flex-center mt-4">
                                <a href="#" class="text-primary">مشاهده آگهی</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-message-dash-comments box-sale-ad-me-lov-dashboard hide-item">
                <div
                    class="w-full h-full mt-10 pt-10 d-flex flex-column justify-content-center align-items-center hidden">
                    <div>
                        <img src="https://farsgamer.com/media/667c3740edf65.png" alt="">
                    </div>

                    <div class="mt-4">
                        <p>متاسفانه هیچی آگهی مورد علاقه ای نداری!</p>
                    </div>
                </div>

                <div class="left-message-main-search flex-box flex-wrap flex-right">
                    <a href="http://localhost:8000/products-sales-ad/playstation-5-slim-asia"
                        class="show-swiper-slide-prudect show-swiper-slide-prudect-dashboard  flex-box flex-column">
                        <div>
                            <img class="w-full" src="http://localhost:8000/site/images/no-img.png" alt="">
                        </div>

                        <div class="title">
                            <span>دستگاه پلی استیشن ۵ اسلیم ریجن آسیا</span>
                        </div>

                        <div class="details">
                            <div class="category">
                                <span>فورتنایت</span>
                            </div>

                            <div class="time">
                                <span>10 دقیقه قبل</span>
                            </div>
                        </div>

                        <div class="price-box-sale">
                            <div class="price">
                                <span>28,000,000</span>

                                <span>تومان</span>
                            </div>

                            <button class="book-mark-sale-ad">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        fill="#F7F7FA" stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="http://localhost:8000/products-sales-ad/playstation-5-slim-asia"
                        class="show-swiper-slide-prudect show-swiper-slide-prudect-dashboard  flex-box flex-column">
                        <div>
                            <img class="w-full" src="http://localhost:8000/site/images/no-img.png" alt="">
                        </div>

                        <div class="title">
                            <span>دستگاه پلی استیشن ۵ اسلیم ریجن آسیا</span>
                        </div>

                        <div class="details">
                            <div class="category">
                                <span>فورتنایت</span>
                            </div>

                            <div class="time">
                                <span>10 دقیقه قبل</span>
                            </div>
                        </div>

                        <div class="price-box-sale">
                            <div class="price">
                                <span>28,000,000</span>

                                <span>تومان</span>
                            </div>

                            <button class="book-mark-sale-ad">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        fill="#F7F7FA" stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="http://localhost:8000/products-sales-ad/playstation-5-slim-asia"
                        class="show-swiper-slide-prudect show-swiper-slide-prudect-dashboard  flex-box flex-column">
                        <div>
                            <img class="w-full" src="http://localhost:8000/site/images/no-img.png" alt="">
                        </div>

                        <div class="title">
                            <span>دستگاه پلی استیشن ۵ اسلیم ریجن آسیا</span>
                        </div>

                        <div class="details">
                            <div class="category">
                                <span>فورتنایت</span>
                            </div>

                            <div class="time">
                                <span>10 دقیقه قبل</span>
                            </div>
                        </div>

                        <div class="price-box-sale">
                            <div class="price">
                                <span>28,000,000</span>

                                <span>تومان</span>
                            </div>

                            <button class="book-mark-sale-ad">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        fill="#F7F7FA" stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="http://localhost:8000/products-sales-ad/playstation-5-slim-asia"
                        class="show-swiper-slide-prudect show-swiper-slide-prudect-dashboard  flex-box flex-column">
                        <div>
                            <img class="w-full" src="http://localhost:8000/site/images/no-img.png" alt="">
                        </div>

                        <div class="title">
                            <span>دستگاه پلی استیشن ۵ اسلیم ریجن آسیا</span>
                        </div>

                        <div class="details">
                            <div class="category">
                                <span>فورتنایت</span>
                            </div>

                            <div class="time">
                                <span>10 دقیقه قبل</span>
                            </div>
                        </div>

                        <div class="price-box-sale">
                            <div class="price">
                                <span>28,000,000</span>

                                <span>تومان</span>
                            </div>

                            <button class="book-mark-sale-ad">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        fill="#F7F7FA" stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </a>

                    <a href="http://localhost:8000/products-sales-ad/playstation-5-slim-asia"
                        class="show-swiper-slide-prudect show-swiper-slide-prudect-dashboard  flex-box flex-column">
                        <div>
                            <img class="w-full" src="http://localhost:8000/site/images/no-img.png" alt="">
                        </div>

                        <div class="title">
                            <span>دستگاه پلی استیشن ۵ اسلیم ریجن آسیا</span>
                        </div>

                        <div class="details">
                            <div class="category">
                                <span>فورتنایت</span>
                            </div>

                            <div class="time">
                                <span>10 دقیقه قبل</span>
                            </div>
                        </div>

                        <div class="price-box-sale">
                            <div class="price">
                                <span>28,000,000</span>

                                <span>تومان</span>
                            </div>

                            <button class="book-mark-sale-ad">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        fill="#F7F7FA" stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M4.25 18.4808V10.2075C4.25 6.57416 4.25 4.75748 5.42157 3.62874C6.59315 2.5 8.47876 2.5 12.25 2.5C16.0212 2.5 17.9069 2.5 19.0784 3.62874C20.25 4.75748 20.25 6.57416 20.25 10.2075V18.4808C20.25 20.7867 20.25 21.9396 19.4772 22.3523C17.9805 23.1514 15.1732 20.4852 13.84 19.6824C13.0668 19.2168 12.6802 18.984 12.25 18.984C11.8198 18.984 11.4332 19.2168 10.66 19.6824C9.3268 20.4852 6.51947 23.1514 5.02285 22.3523C4.25 21.9396 4.25 20.7867 4.25 18.4808Z"
                                        stroke="#374151" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</section>
