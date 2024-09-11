@extends('layouts.app')

@section('main')
    <main id="content" role="main" class="container-fluid py-5" style="height: 100vh;">
        <div class="row justify-content-center h-100">
            <div class="col-md-12 h-100 d-flex flex-column">
                <div class="card chatCard w-100 h-100 d-flex flex-column">
                    <!-- Header with user info -->
                    <div class="card-header bg-white text-left d-flex align-items-center border-0">
                        <img src="https://i.pinimg.com/736x/aa/70/8d/aa708d1f97a04f6f5a208213f89e1e67.jpg" class="rounded-circle me-3 avatar" alt="User Avatar">
                        <span class="fw-bold chat-title text-dark">Chat with Us</span>    
                    </div>
                    <!-- Chat Body -->
                    <div class="card-body chat-body flex-fill">
                        <!-- Chat Messages -->
                        <div class="d-flex mb-3">
                            <img src="https://i.pinimg.com/736x/aa/70/8d/aa708d1f97a04f6f5a208213f89e1e67.jpg" class="rounded-circle me-2" alt="User Avatar">
                            <div class="chat-bubble left p-3 bg-light rounded-3">
                                Hi, how are you?
                                <span class="timestamp">10:10 AM</span> <!-- Timestamp added here -->
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-3">
                            <div class="chat-bubble right p-3 bg-primary text-white rounded-3">
                                I'm good, thank you!
                                <span class="timestamp">10:13 AM</span> <!-- Timestamp added here -->
                            </div>
                            <img src="https://img.freepik.com/free-vector/illustration-businessman_53876-5856.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1725840000&semt=ais_hybrid" class="rounded-circle ms-2" alt="User Avatar">
                        </div>
                        <div class="d-flex mb-3">
                            <img src="https://i.pinimg.com/736x/aa/70/8d/aa708d1f97a04f6f5a208213f89e1e67.jpg" class="rounded-circle me-2" alt="User Avatar">
                            <div class="chat-bubble left p-3 bg-light rounded-3">
                                Most welcome
                                <span class="timestamp">10:15 AM</span> <!-- Timestamp added here -->
                            </div>
                        </div>
                    </div>

                    <!-- Footer with input form -->
                    <div class="card-footer bg-white">
                        <form id="chatForm">
                            <div class="input-group">
                                <input type="text" class="form-control chatInput form-control-lg rounded-pill me-3" name="content" placeholder="Write a message...">
                                <button type="submit" class="btn btn-attractive-yellow btn-lg rounded-pill">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
