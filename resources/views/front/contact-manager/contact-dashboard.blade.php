@extends('front.masterpage')
@section('content')


<div class=" ht-100v pd-0">
     

      <div class="content-body pd-0">
        <div class="contact-wrapper contact-wrapper-two">
          <div class="contact-navleft">
            <nav class="nav flex-column" role="tablist">
              <a href="#tabContact" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab">
                <span data-bs-toggle="tooltip" data-placement="right" aria-label="All Contacts" data-bs-original-title="All Contacts"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
              </a>
              <a href="#tabPhoneCall" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                <span data-bs-toggle="tooltip" data-placement="right" aria-label="Recently Contacted" data-bs-original-title="Recently Contacted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></span>
              </a>
              <a href="#tabFavorites" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                <span data-bs-toggle="tooltip" data-placement="right" aria-label="Favorites" data-bs-original-title="Favorites"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span>
              </a>
              <a href="#tabTags" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                <span data-bs-toggle="tooltip" data-placement="right" aria-label="Contact Labels" data-bs-original-title="Contact Labels"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg></span>
              </a>
              <a href="#tabExport" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                <span data-bs-toggle="tooltip" data-placement="right" aria-label="Export Contacts" data-bs-original-title="Export Contacts"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg></span>
              </a>
              <a href="#" class="nav-link" aria-selected="false" tabindex="-1" role="tab">
                <span data-bs-toggle="tooltip" data-placement="right" aria-label="Contact Settings" data-bs-original-title="Contact Settings"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span>
              </a>
            </nav>
          </div><!-- contact-navleft -->

          <div class="contact-sidebar">
            <div class="contact-sidebar-header">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              <div class="search-form">
                <input type="search" class="form-control" placeholder="Search contacts">
              </div>
              <a href="#modalNewContact" class="btn btn-xs btn-icon btn-primary" data-bs-toggle="modal">
                <span data-bs-toggle="tooltip" aria-label="Add New Contact" data-bs-original-title="Add New Contact"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg></span>
              </a><!-- contact-add -->
            </div><!-- contact-sidebar-header -->
            <div class="contact-sidebar-body ps ps--active-y">
              <div class="tab-content">
                <div id="tabContact" class="tab-pane fade active show" role="tabpanel">
                  <div class="pd-y-20 pd-x-10 contact-list">
                    <label id="contactA" class="contact-list-divider">A</label>
                    <div class="media active">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-700">A</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Abigail Johnson</h6>
                        <span class="tx-12">+1-234-567-890</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img14.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Archie Cantones</h6>
                        <span class="tx-12">archie@cantones.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Allan Rey Palban</h6>
                        <span class="tx-12">allanr@palban.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-info">a</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Aileen Mante</h6>
                        <span class="tx-12">+1-234-567-890</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <label id="contactB" class="contact-list-divider">B</label>
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img11.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Brenda Aceron</h6>
                        <span class="tx-12">brenda@aceron.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-indigo">B</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Brandibelle Yap</h6>
                        <span class="tx-12">byap@urmail.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-800">B</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Brejette Bunggay</h6>
                        <span class="tx-12">+1-234-567-890</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->

                    <label id="contactC" class="contact-list-divider">C</label>

                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img13.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Camille Audrey</h6>
                        <span class="tx-12">+1-234-567-890</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img12.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Christine Lerio</h6>
                        <span class="tx-12">+1-234-567-890</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->

                    <label id="contactD" class="contact-list-divider">D</label>

                    <div class="media">
                      <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-primary">D</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Daniel Calinawan</h6>
                        <span class="tx-12">daniel@youremail.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->

                    <label id="contactE" class="contact-list-divider">E</label>

                    <div class="media">
                      <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-success">E</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
                        <span class="tx-12">+63929-123-4567</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-700">E</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Elena Salubre</h6>
                        <span class="tx-12">e.salubre@myemail.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                  </div><!-- contact-list -->
                </div><!-- tab-pane -->
                <div id="tabPhoneCall" class="tab-pane fade" role="tabpanel">
                  <div class="pd-y-20 pd-x-10 contact-list">
                    <label class="contact-list-divider">Recently Contacted</label>
                    <div class="media active">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img13.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Camille Audrey</h6>
                        <span class="tx-12">+1-234-567-890</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-success">E</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
                        <span class="tx-12">+63929-123-4567</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                  </div><!-- contact-list -->
                </div><!-- tab-pane -->
                <div id="tabFavorites" class="tab-pane fade" role="tabpanel">
                  <div class="pd-y-20 pd-x-10 contact-list">
                    <label class="contact-list-divider">My Favorites</label>
                    <div class="media active">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img14.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Archie Cantones</h6>
                        <span class="tx-12">archie@cantones.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img11.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Brenda Aceron</h6>
                        <span class="tx-12">brenda@aceron.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-indigo">B</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Brandibelle Yap</h6>
                        <span class="tx-12">byap@urmail.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img13.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Camille Audrey</h6>
                        <span class="tx-12">+1-234-567-890</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-success">E</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
                        <span class="tx-12">+63929-123-4567</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                  </div><!-- contact-list -->
                </div><!-- tab-pane -->
                <div id="tabTags" class="tab-pane fade" role="tabpanel">
                  <div class="pd-y-20 pd-x-10 contact-list">
                    <label class="contact-list-divider">My Family</label>
                    <div class="media active">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-700">A</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Abigail Johnson</h6>
                        <span class="tx-12">+1-234-567-890</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><img src="img/img14.jpg" class="rounded-circle" alt=""></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Archie Cantones</h6>
                        <span class="tx-12">archie@cantones.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <label class="contact-list-divider">My Friends</label>
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-primary">a</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Allan Rey Palban</h6>
                        <span class="tx-12">allanr@palban.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-primary">D</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Daniel Calinawan</h6>
                        <span class="tx-12">daniel@youremail.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <div class="media">
                      <div class="avatar avatar-sm avatar-offline"><span class="avatar-initial rounded-circle bg-success">E</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Elvis Vircede</h6>
                        <span class="tx-12">+63929-123-4567</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                    <label class="contact-list-divider">My Officemates</label>
                    <div class="media">
                      <div class="avatar avatar-sm avatar-online"><span class="avatar-initial rounded-circle bg-gray-700">E</span></div>
                      <div class="media-body mg-l-10">
                        <h6 class="tx-13 mg-b-3">Elena Salubre</h6>
                        <span class="tx-12">e.salubre@myemail.com</span>
                      </div><!-- media-body -->
                      <nav>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                      </nav>
                    </div><!-- media -->
                  </div><!-- contact-list -->
                </div><!-- tab-pane -->
                <div id="tabExport" class="tab-pane fade" role="tabpanel">
                  <div class="pd-y-25 pd-x-20">
                    <h6 class="tx-12 tx-semibold tx-spacing-1 tx-uppercase">Export Contacts</h6>
                    <p class="tx-13 tx-color-03 mg-b-20">You can export your contacts and import them into other email apps.</p>
                    <div class="form-group">
                      <label class="tx-13">Which contacts do you want to export?</label>
                      <select class="custom-select tx-13">
                        <option value="1" selected="">All Contacts</option>
                        <option value="2">My Favorites</option>
                        <option value="3">My Family</option>
                        <option value="4">My Friends</option>
                        <option value="4">My Officemates</option>
                      </select>
                    </div><!-- form-group -->
                    <button class="btn btn-sm btn-primary">Export</button>
                  </div>
                </div><!-- tab-pane -->
              </div><!-- tab-content -->
            <div class="ps__rail-x" style="left: 0px; top: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
            <div class="ps__rail-y" style="top: 0px; height: 474px; right: 0px;">
              <!-- <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 261px;"></div> -->
            </div>
            </div>
           
          </div><!-- contact-sidebar -->

          <div class="contact-content">
            <div class="contact-content-header">
              <nav class="nav" role="tablist">
                <a href="#contactInformation" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab">Contact Info<span>rmation</span></a>
                <a href="#contactLogs" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><span>Call &amp; Message </span>Logs</a>
              </nav>
              <a href="#" id="contactOptions" class="text-secondary mg-l-auto d-xl-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></a>
            </div><!-- contact-content-header -->

            <div class="contact-content-body ps ps--active-y">
              <div class="tab-content">

                <div id="contactInformation" class="tab-pane pd-20 pd-xl-25 active show" role="tabpanel">
                  <div class="d-flex align-items-center justify-content-between mg-b-25">
                    <h6 class="mg-b-0">Personal Details</h6>
                    <div class="d-flex">
                      <a href="#modalEditContact" data-bs-toggle="modal" class="btn btn-sm btn-white d-flex align-items-center mg-r-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg><span class="d-none d-sm-inline mg-l-5"> Edit</span></a>
                      <a href="#modalDeleteContact" data-bs-toggle="modal" class="btn btn-sm btn-white d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg><span class="d-none d-sm-inline mg-l-5"> Delete</span></a>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6 col-sm">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Firstname</label>
                      <p class="mg-b-0">Abigail</p>
                    </div><!-- col -->
                    <div class="col-6 col-sm">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Middlename</label>
                      <p class="mg-b-0">Christensen</p>
                    </div><!-- col -->
                    <div class="col-sm mg-t-20 mg-sm-t-0">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Lastname</label>
                      <p class="mg-b-0">Johnson</p>
                    </div><!-- col -->
                  </div><!-- row -->

                  <h6 class="mg-t-40 mg-b-20">Contact Details</h6>

                  <div class="row row-sm">
                    <div class="col-6 col-sm-4">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Mobile Phone</label>
                      <p class="tx-primary tx-rubik mg-b-0">+1 290 912 3868</p>
                    </div>
                    <div class="col-6 col-sm-4">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Home Phone</label>
                      <p class="tx-primary tx-rubik mg-b-0">+1 011 342 3129</p>
                    </div>
                    <div class="col-6 col-sm-4 mg-t-20 mg-sm-t-0">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Work Phone</label>
                      <p class="tx-primary tx-rubik mg-b-0">+1 100 003 3344</p>
                    </div>
                    <div class="col-sm-4 mg-t-20 mg-sm-t-30">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Email Address</label>
                      <p class="tx-primary mg-b-0">me@themepixels.me</p>
                    </div>
                    <div class="col-sm-4 mg-t-20 mg-sm-t-30">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Company</label>
                      <p class="mg-b-0">ThemePixels, Inc.</p>
                    </div>
                    <div class="col-sm-4 mg-t-20 mg-sm-t-30">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Job Position</label>
                      <p class="mg-b-0">President &amp; CEO</p>
                    </div>
                    <div class="col-sm-6 mg-t-20 mg-sm-t-30">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Home Address</label>
                      <p class="mg-b-0">4658 Kenwood Place<br>Pompano Beach, FL 33060, United States</p>
                    </div>
                    <div class="col-sm-6 mg-t-20 mg-sm-t-30">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Work Address</label>
                      <p class="mg-b-0">819 Waldeck Street<br>Farmers Branch, TX 75244, United States</p>
                    </div>
                    <div class="col-sm-6 mg-t-20 mg-sm-t-30">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Personal Website</label>
                      <p class="tx-primary mg-b-0">http://themepixels.me/</p>
                    </div>
                    <div class="col-sm-6 mg-t-20 mg-sm-t-30">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Social Profiles</label>
                      <nav class="nav nav-social">
                        <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                        <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                        <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                        <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a>
                      </nav>
                    </div><!-- col -->
                    <div class="col-sm mg-t-20 mg-sm-t-30">
                      <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Notes</label>
                      <p class="tx-13 mg-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    </div>
                  </div><!-- row -->
                </div>
                <div id="contactLogs" class="tab-pane pd-20 pd-xl-25" role="tabpanel">
                  <div class="d-flex align-items-center justify-content-between mg-b-30">
                    <h6 class="tx-15 mg-b-0">Call &amp; Message Logs</h6>
                    <a href="#" class="btn btn-sm btn-white d-flex align-items-center"><ion-icon name="time-outline" class="mg-r-5 tx-16 lh--9"></ion-icon> Clear History</a>
                  </div>
                </div><!-- tab-pane -->
              </div><!-- tab-content -->
            <div class="ps__rail-x" style="left: 0px; top: 132px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 132px; height: 140px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 27px; height: 29px;"></div></div></div><!-- contact-content-body -->

            <div class="contact-content-sidebar ps">
              <div class="clearfix mg-b-25">
                <div id="contactAvatar" class="pos-relative float-start">
                  <div class="avatar avatar-xl"><span class="avatar-initial rounded-circle bg-gray-700 tx-normal">A</span></div>
                  <a href="#" class="contact-edit-photo" data-bs-toggle="tooltip" aria-label="Upload Photo" data-bs-original-title="Upload Photo"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                </div>
              </div>
              <h5 id="contactName" class="tx-18 tx-xl-20 mg-b-5">Abigail Johnson</h5>
              <p class="tx-13 tx-lg-12 tx-xl-13 tx-color-03 mg-b-20">President &amp; CEO - ThemePixels, Inc.</p>
              <nav class="contact-call-nav mg-b-20">
                <a href="#" class="nav-call" data-bs-toggle="tooltip" aria-label="Make a Phone Call" data-bs-original-title="Make a Phone Call"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></a>
                <a href="#" class="nav-video" data-bs-toggle="tooltip" aria-label="Make a Video Call" data-bs-original-title="Make a Video Call"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></a>
                <a href="#" class="nav-msg" data-bs-toggle="tooltip" aria-label="Send Message" data-bs-original-title="Send Message"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></a>
              </nav><!-- contact-call-nav -->

              <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-10">Biography</label>
              <p class="tx-13 mg-b-0">Gambler, Tea Drinker, Ultimate Piggie, Replacement President of a Major Soft Drink Manufacturer. When I give out candies, I give people the flavour I don't like. </p>

              <hr class="mg-y-20">

              <label class="tx-10 tx-medium tx-spacing-1 tx-color-03 tx-uppercase tx-sans mg-b-15">Options</label>
              <nav class="nav flex-column contact-content-nav mg-b-25">
                <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg> Share this Contact</a>
                <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> Add to Favorites</a>
                <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg> Block this Contact</a>
              </nav>

            <div class="ps__rail-x" style="left: 0px; top: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div><!-- contact-content-sidebar -->
          </div><!-- contact-content -->

        </div><!-- contact-wrapper -->
      </div>
    </div>



@endsection