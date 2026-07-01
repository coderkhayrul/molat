@extends('backend.layouts.app')
@section('content')
    @push('content-title')
        <h2 class="page-title">Categories</h2>
    @endpush
    <!-- Show Notification -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-4">
        <!-- Left Column: Add New Category Form -->
        <div class="col-lg-4">
            <div class="panel-card sticky-top" style="top: 90px;">
                <div class="panel-header">
                    <span class="text-dark fs-5 font-bold"><i class="fas fa-plus-circle text-warning me-2"></i>
                        <strong>
                            Create New Category
                        </strong>
                    </span>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.categories.store') }}" method="POST" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Name <span class="text-danger">*</span></label>
                            <input name="name" type="text" class="form-control" id="categoryName"
                                placeholder="Ex: Science Fiction" required>
                            <div class="form-text">This name will be displayed in the website's category menu.</div>
                        </div>
                        <div class="mb-3">
                            <label for="categorySlug" class="form-label">Slug</label>
                            <input name="slug" type="text" class="form-control" id="categorySlug"
                                placeholder="Ex: science-fiction">
                            <div class="form-text">For URL purposes. Typically lowercase letters and hyphens (-) instead of
                                spaces.</div>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input name="image" type="file" class="form-control" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="banner_image" class="form-label">Banner Image</label>
                            <input name="banner_image" type="file" class="form-control" id="banner_image">
                        </div>
                        <div class="mb-4">
                            <label for="categoryDesc" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="categoryDesc" rows="4"
                                placeholder="Write a brief description about the category..."></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark py-2"><i class="fas fa-save me-2"></i> Save
                                Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right Column: Category List Table -->
        <div class="col-lg-8">
            <div class="panel-card">
                <div class="panel-header">
                    <span class="text-dark fs-5"><i class="fas fa-list text-warning me-2"></i> <strong>Category
                            List</strong></span>

                    <!-- Search Box for Categories -->
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <input type="text" class="form-control" placeholder="Search categories...">
                        <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="panel-body p-0">
                    <div class="table-responsive">
                        <table class="table table-custom mb-0 table-hover align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 60px;">#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th class="text-center">Book Count</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categories as $category)
                                    <tr>
                                        <td class="text-center fw-bold text-muted">1</td>
                                        <td class="text-muted fs-5">
                                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                                class="img-fluid" style="max-width: 70px;">

                                        </td>
                                        <td class="fw-bold text-dark">{{ $category->name }}</td>
                                        <td><span class="text-muted">{{ $category->slug }}</span></td>
                                        <td class="text-center"><span class="badge bg-light text-dark border">0</span>
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="action-buttons-wrapper">
                                                {{-- <button type="button" class="action-btn btn-edit" title="Edit"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                        class="fas fa-edit"></i></button> --}}

                                                <button type="button" class="action-btn btn-edit edit-category-btn"
                                                    data-bs-toggle="modal" data-bs-target="#editCategoryModal"
                                                    data-id="{{ $category->id }}" data-name="{{ $category->name }}"
                                                    data-image="{{ $category->image ? asset('storage/' . $category->image) : '' }}"
                                                    data-banner="{{ $category->banner_image ? asset('storage/' . $category->banner_image) : '' }}"
                                                    title="এডিট">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <!-- Delete Form -->
                                                <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                                    method="POST" class="delete-form" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="action-btn btn-delete show_confirm"
                                                        title="ডিলিট">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">No categories found.</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Footer -->
                    <div class="p-3 border-top">
                        {{ $categories->links('pagination::bootstrap-5') }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold"><i class="fas fa-edit text-warning me-2"></i> ক্যাটাগরি এডিট</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form id="editCategoryForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">ক্যাটাগরির নাম <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="editCategoryName" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ক্যাটাগরি ইমেজ</label>
                            <input type="file" class="form-control" name="image" accept="image/*">

                            <div id="imagePreviewContainer" class="mt-2 d-none align-items-center">
                                <img id="editImagePreview" src="" alt="Image"
                                    style="height: 50px; border-radius: 5px; margin-right: 10px;">
                                <button type="button" class="btn btn-sm btn-danger" onclick="removePreview('image')"><i
                                        class="fas fa-trash"></i> ডিলিট</button>
                                <input type="hidden" name="remove_image" id="removeImageInput" value="0">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ব্যানার ইমেজ</label>
                            <input type="file" class="form-control" name="banner_image" accept="image/*">

                            <div id="bannerPreviewContainer" class="mt-2 d-none align-items-center">
                                <img id="editBannerPreview" src="" alt="Banner"
                                    style="height: 50px; border-radius: 5px; margin-right: 10px;">
                                <button type="button" class="btn btn-sm btn-danger" onclick="removePreview('banner')"><i
                                        class="fas fa-trash"></i> ডিলিট</button>
                                <input type="hidden" name="remove_banner" id="removeBannerInput" value="0">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" class="btn btn-dark"><i class="fas fa-save me-2"></i> আপডেট করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Auto-generate slug from category name
        document.getElementById('categoryName').addEventListener('input', function() {
            const name = this.value.trim();
            const slug = name.toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '');
            document.getElementById('categorySlug').value = slug;
        });

        // Delete confirmation using SweetAlert2
        const deleteButtons = document.querySelectorAll('.show_confirm');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const form = this.closest('form');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#e74c3c',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
