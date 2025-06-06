@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Message</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Message</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">
            <div class="customer-chat">
                <div class="header-navigation">
                    <a href="dashboard.html" class="d-inline-flex align-items-center"><i class="isax isax-arrow-left me-2"></i>Back to Dashboard</a>
                </div>
                <div class="row chat-window">

                    <!-- Chat User List -->
                    <div class="col-lg-4 chat-cont-left ">
                        <div class="card mb-0 flex-fill">
                            <div class="chat-header">
                                <div class="mb-3">
                                    <h6>Chats</h6>
                                </div>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
										<i class="isax isax-search-normal-14"></i>
									</span>
                                    <input type="email" class="form-control form-control-md" placeholder="Search">
                                </div>
                            </div>
                            <div class="card-body chat-users-list chat-scroll pt-0">
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online  flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-08.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Beth Williams</h6>
                                            <p class="fs-14 d-flex align-items-center"><i class="isax isax-image5 me-1"></i>Image</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">20/03/24</p>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg  flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-29.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Adrian Marshall</h6>
                                            <p class="fs-14 text-gray-6 text-truncate">Have you called them?</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">Just Now</p>
                                            <div class="d-flex justify-content-end">
                                                <span class="msg-count badge badge-primary d-flex align-items-center justify-content-center rounded-circle">2</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-19.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Robert Miller</h6>
                                            <p class="fs-14 d-flex align-items-center"><i class="isax isax-video5 me-1"></i>Video</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">5 Mins Ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-30.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Robert Miller</h6>
                                            <p class="fs-14 d-flex align-items-center"><i class="isax isax-document-text-15 me-1"></i>Project Tools.doc</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">10:20 PM</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-31.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Samuel James</h6>
                                            <p class="fs-14 d-flex align-items-center"><i class="isax isax-microphone-25 me-1"></i>Audio</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">12:30 PM</p>
                                            <div>
                                                <i class="fa-solid fa-check-double text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-32.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Adrian Marshall</h6>
                                            <p class="fs-14 text-gray-6">Have you called them?</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">Just Now</p>
                                            <div class="d-flex justify-content-end">
                                                <span class="msg-count badge badge-primary d-flex align-items-center justify-content-center rounded-circle">3</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-08.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Timothy Brewer</h6>
                                            <p class="fs-14 text-gray-6 d-flex align-items-center"><i class="ti ti-file me-1"></i>Document</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">5 Mins Ago</p>
                                            <div>
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member  mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-09.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Tom Andrews</h6>
                                            <p class="fs-14 text-danger d-flex align-items-center "><i class="isax isax-call5 me-1 text-gray-9"></i>Missed Call</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">Yesterday</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member  mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-33.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Peter Anderson</h6>
                                            <p class="fs-14  d-flex align-items-center ">Have you called them?</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">23/03/24</p>
                                            <div>
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member  mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-20.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Samuel James</h6>
                                            <p class="fs-14  d-flex align-items-center "><i class="isax isax-document-text-15 me-1"></i>Prescription.doc</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">20/03/24</p>
                                            <div>
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-15.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">John James</h6>
                                            <p class="fs-14 text-danger d-flex align-items-center "><i class="isax isax-call5 me-1 text-gray-9"></i>Missed Call</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">Yesterday</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="d-flex justify-content-between chat-member">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-12.jpg" alt="User Image">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Timothy Brewer</h6>
                                            <p class="fs-14 text-danger d-flex align-items-center "><i class="isax isax-call5 me-1 text-gray-9"></i>Missed Call</p>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="text-end">
                                            <p class="mb-1 fs-14 text-gray-6">Yesterday</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Chat User List -->

                    <!-- Chat Content -->
                    <div class="col-lg-8 chat-cont-right chat-window-long">

                        <!-- Chat History -->
                        <div class="card chat-window mb-0 shadow-none flex-fill">
                            <div class="card-header border-0">
                                <div class="msg_head">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                        <div class="avatar avatar-lg online flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-08.jpg" alt="User">
                                        </div>
                                        <div>
                                            <h6 class="fs-16 fw-medium mb-1">Aariyan Jose</h6>
                                            <p class="fs-14">Online</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center send-action">
                                        <a href="javascript:void(0);" class="btn chat-search-btn send-action-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                                            <i class="isax isax-search-normal-14"></i>
                                        </a>
                                        <a class="btn no-bg send-action-btn rounded-circle" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li><a href="{{ route('dashboard') }}" class="dropdown-item"><i class="isax isax-close-circle me-2"></i>Close Chat</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item"><i class="fa-solid fa-volume-xmark me-2"></i>Mute Notification</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-clock me-2"></i>Disappearing Message</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-refresh me-2"></i>Clear Message</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-trash me-2"></i>Delete Chat</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item"><i class="fa-regular fa-thumbs-down me-2"></i>Report</a></li>
                                            <li><a href="javascript:void(0);" class="dropdown-item"><i class="fa-solid fa-ban me-2"></i>Block</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Chat Search -->
                                <div class="chat-search search-wrap contact-search">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Contacts">
                                            <span class="input-group-text"><i class="isax isax-search-normal-14"></i></span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /Chat Search -->
                            </div>
                            <div class="card-body msg_card_body chat-scroll">

                                <ul class="list-unstyled">
                                    <li class="sent-message-group">
                                        <ul>
                                            <li class="media sent d-flex align-items-end">
                                                <div class="media-body flex-grow-1">
                                                    <div class="msg-box">
                                                        <div class="d-flex align-items-center justify-content-end mb-1">
                                                            <div>
                                                                <h6 class="fs-16 fw-normal d-flex align-items-center">Chris Foxy</h6>
                                                                <div class="d-flex justify-content-end">
                                                                    <p class="fs-12">9:45 AM <i class="ms-1 text-success fa-solid fa-check-double"></i></p>
                                                                </div>
                                                            </div>
                                                            <div class="ms-2">
                                                                <img src="assets/img/users/user-lg-26.jpg" alt="image" class="avatar avatar-lg">
                                                            </div>
                                                        </div>
                                                        <div class="position-relative">
                                                            <div class="d-flex align-items-center">
                                                                <div class="chat-actions me-2">
                                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                        <li><a class="dropdown-item reply-btn" href="javascript:void(0);"><i class="isax isax-back-square me-2"></i>Reply</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-regular fa-share-from-square me-2"></i>Forward</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-copy me-2"></i>Copy</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-heart me-2"></i>Mark as Favourite</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="isax isax-trash me-2"></i>Delete</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-check me-2"></i>Mark as Unread</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-archive-1 me-2"></i>Archeive Chat</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-thumbtack me-2"></i>Pin Chat</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sent-message">
                                                                    <p class="fs-14">Hello! I’m interested in booking a cruise tour. Could you help me with some details?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-center day-badge mb-4"><span class="badge badge-light badge-md text-gray-9 fw-normal fs-14 rounded-pill mx-auto">Today, March 25</span></li>
                                    <li class="media received">
                                        <div class="d-flex align-items-center mb-1">
                                            <div class="avatar avatar-lg flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-08.jpg" alt="User Image ">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-normal d-flex align-items-center">Beth Williams</h6>
                                                <div class="d-flex justify-content-start">
                                                    <p class="fs-12">10:47 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div class="position-relative">
                                                    <div class="d-flex align-items-center ">
                                                        <div class="received-message me-2">
                                                            <p class="fs-14">Hello! Absolutely, I'd be happy to assist. Could you please let me know which destinations or type of cruise you’re interested in?</p>
                                                        </div>
                                                        <div class="chat-actions me-2">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                <li><a class="dropdown-item reply-btn" href="javascript:void(0);"><i class="isax isax-back-square me-2"></i>Reply</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-regular fa-share-from-square me-2"></i>Forward</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-copy me-2"></i>Copy</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-heart me-2"></i>Mark as Favourite</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="isax isax-trash me-2"></i>Delete</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-check me-2"></i>Mark as Unread</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-archive-1 me-2"></i>Archeive Chat</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-thumbtack me-2"></i>Pin Chat</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sent-message-group">
                                        <ul>
                                            <li class="media sent d-flex align-items-end">
                                                <div class="media-body flex-grow-1">
                                                    <div class="msg-box">
                                                        <div class="d-flex align-items-center justify-content-end mb-1">
                                                            <div>
                                                                <h6 class="fs-16 fw-normal d-flex align-items-center">Chris Foxy</h6>
                                                                <div class="d-flex justify-content-end">
                                                                    <p class="fs-12">11:00 AM <i class="ms-1 text-success fa-solid fa-check-double"></i></p>
                                                                </div>
                                                            </div>
                                                            <div class="ms-2">
                                                                <img src="assets/img/users/user-lg-26.jpg" alt="image" class="avatar avatar-lg">
                                                            </div>
                                                        </div>
                                                        <div class="position-relative">
                                                            <div class="d-flex align-items-center">
                                                                <div class="chat-actions me-2">
                                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                        <li><a class="dropdown-item reply-btn" href="javascript:void(0);"><i class="isax isax-back-square me-2"></i>Reply</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-regular fa-share-from-square me-2"></i>Forward</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-copy me-2"></i>Copy</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-heart me-2"></i>Mark as Favourite</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="isax isax-trash me-2"></i>Delete</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-check me-2"></i>Mark as Unread</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-archive-1 me-2"></i>Archeive Chat</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-thumbtack me-2"></i>Pin Chat</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sent-message">
                                                                    <p class="fs-14">I was looking at the Caribbean options. Do you have any upcoming cruises with stops in the Bahamas and Jamaica?</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="media received">
                                        <div class="d-flex align-items-center mb-1">
                                            <div class="avatar avatar-lg flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-08.jpg" alt="User Image ">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-normal d-flex align-items-center">Beth Williams</h6>
                                                <div class="d-flex justify-content-start">
                                                    <p class="fs-12">11:00 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div class="position-relative">
                                                    <div class="d-flex align-items-center ">
                                                        <div class="received-message me-2">
                                                            <p class="fs-14">Yes, we do! We have a 7-day Caribbean cruise that includes stops in the Bahamas, Jamaica, and Cozumel, Mexico. It departs on December 15. Would this be of interest?</p>
                                                        </div>
                                                        <div class="chat-actions me-2">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                <li><a class="dropdown-item reply-btn" href="javascript:void(0);"><i class="isax isax-back-square me-2"></i>Reply</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-regular fa-share-from-square me-2"></i>Forward</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-copy me-2"></i>Copy</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-heart me-2"></i>Mark as Favourite</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="isax isax-trash me-2"></i>Delete</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-check me-2"></i>Mark as Unread</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-archive-1 me-2"></i>Archeive Chat</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-thumbtack me-2"></i>Pin Chat</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sent-message-group">
                                        <ul>
                                            <li class="media sent d-flex align-items-end">
                                                <div class="media-body flex-grow-1">
                                                    <div class="msg-box">
                                                        <div class="d-flex align-items-center justify-content-end mb-1">
                                                            <div>
                                                                <h6 class="fs-16 fw-normal d-flex align-items-center">Chris Foxy</h6>
                                                                <div class="d-flex justify-content-end">
                                                                    <p class="fs-12">11:05 AM<i class="ms-1 text-success fa-solid fa-check-double"></i></p>
                                                                </div>
                                                            </div>
                                                            <div class="ms-2">
                                                                <img src="assets/img/users/user-lg-26.jpg" alt="image" class="avatar avatar-lg">
                                                            </div>
                                                        </div>
                                                        <div class="position-relative">
                                                            <div class="d-flex align-items-center">
                                                                <div class="chat-actions me-2">
                                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                        <li><a class="dropdown-item reply-btn" href="javascript:void(0);"><i class="isax isax-back-square me-2"></i>Reply</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-regular fa-share-from-square me-2"></i>Forward</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-copy me-2"></i>Copy</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-heart me-2"></i>Mark as Favourite</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="isax isax-trash me-2"></i>Delete</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-check me-2"></i>Mark as Unread</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-archive-1 me-2"></i>Archeive Chat</a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-thumbtack me-2"></i>Pin Chat</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="sent-message">
                                                                    <p class="fs-14">That sounds perfect! Could you tell me about the cabin options and pricing?</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="media received">
                                        <div class="d-flex align-items-center mb-1">
                                            <div class="avatar avatar-lg flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-08.jpg" alt="User Image ">
                                            </div>
                                            <div>
                                                <h6 class="fs-16 fw-normal d-flex align-items-center">Beth Williams</h6>
                                                <div class="d-flex justify-content-start">
                                                    <p class="fs-12">11:10 AM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <div class="msg-box">
                                                <div class="position-relative">
                                                    <div class="d-flex align-items-center">
                                                        <div class="received-message me-2">
                                                            <p class="fs-14">Of course. We offer the following cabin options</p>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);"><img src="assets/img/cruise/cruise-14.jpg" alt="image" class="avatar avatar-xxl me-2"></a>
                                                                <a href="javascript:void(0);"><img src="assets/img/cruise/cruise-29.jpg" alt="image" class="avatar avatar-xxl me-2"></a>
                                                                <div class="img-count">
                                                                    <a href="javascript:void(0);"><img src="assets/img/cruise/cruise-13.jpg" alt="image" class="avatar avatar-xxl me-2"></a>
                                                                    <a href="javascript:void(0);"><span class="fs-16 fw-medium text-white counts">10+</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-actions me-2">
                                                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                <li><a class="dropdown-item reply-btn" href="javascript:void(0);"><i class="isax isax-back-square me-2"></i>Reply</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-regular fa-share-from-square me-2"></i>Forward</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-copy me-2"></i>Copy</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-heart me-2"></i>Mark as Favourite</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#message-delete"><i class="isax isax-trash me-2"></i>Delete</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-check me-2"></i>Mark as Unread</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="isax isax-archive-1 me-2"></i>Archeive Chat</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="fa-solid fa-thumbtack me-2"></i>Pin Chat</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a href="javascript:void(0);"><span><img src="assets/img/icons/thumbs-up.svg" alt="image"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer border-0">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center chat-input-icons">
                                        <a class="btn no-bg" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end p-3">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-camera me-2"></i>Camera</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-gallery me-2"></i>Gallery</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-audio-square me-2"></i>Audio</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-location me-2"></i>Location</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="isax isax-user-cirlce-add me-2"></i>Contact</a>
                                        </div>
                                        <div class="form-item emoj-action-foot">
                                            <a href="javascrip:void(0);" class="action-circle"><i class="fa-regular fa-face-smile"></i></a>
                                            <div class="emoj-group-list-foot down-emoji-circle">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);"><img src="assets/img/icons/emonji-02.svg" alt="Icon"></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><img src="assets/img/icons/emonji-05.svg" alt="Icon"></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><img src="assets/img/icons/emonji-06.svg" alt="Icon"></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><img src="assets/img/icons/emonji-07.svg" alt="Icon"></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><img src="assets/img/icons/emonji-08.svg" alt="Icon"></a>
                                                    </li>
                                                    <li class="add-emoj"><a href="javascript:void(0);"><i class="isax isax-add"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"><i class="isax isax-microphone-2"></i></a>
                                    </div>
                                    <div class="chat-input me-2">
                                        <input class="form-control" placeholder="Type your message here...">
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn_send"><i class="isax isax-send-25 text-white" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Chat Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
    
@endsection