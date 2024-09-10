@extends('layouts.app')

@section('main')
    <main id="content" role="main" class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card chatCard">
                    <!-- Header with user info -->
                    <div class="card-header bg-white text-left d-flex align-items-center">
                        <img src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-transparent-600nw-2463868847.jpg" class="rounded-circle me-2" alt="User Avatar">
                        <span class="fw-bold">Chat with User</span>
                    </div>

                    <!-- Chat Body -->
                    <div class="card-body p-3 chat-body" style="height: 500px; overflow-y: auto;">
                        <!-- Chat Messages -->
                        <div class="d-flex mb-3">
                            <img src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-transparent-600nw-2463868847.jpg" class="rounded-circle me-2" alt="User Avatar">
                            <div class="chat-bubble left p-3 bg-light rounded-3">
                                Hi, how are you?
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mb-3">
                            <div class="chat-bubble right p-3 bg-primary text-white rounded-3">
                                I'm good, thank you!
                            </div>
                            <img src="https://www.shutterstock.com/image-vector/default-avatar-profile-icon-transparent-600nw-2463868847.jpg" class="rounded-circle ms-2" alt="User Avatar">
                        </div>
                    </div>

                    <!-- Footer with input form -->
                    <div class="card-footer bg-white">
                        <form id="chatForm">
                            <div class="input-group">
                                <input type="text" class="form-control chatInput form-control-lg" name="content" placeholder="Write a message...">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
