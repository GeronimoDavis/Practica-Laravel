<x-layout>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Loans Management</h2>
        <div>
            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addBookModal">
                <i class="fas fa-book-medical"></i> Add Book
            </button>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addLoanModal">
                <i class="fas fa-plus"></i> Add Loan
            </button>
        </div>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Book</th>
                <th>Member</th>
                <th>Email</th>
                <th>Loan Date</th>
                <th>Active</th>
                <th>Created By</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>The Great Gatsby</td>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>2025-11-18</td>
                <td><span class="badge bg-success">Yes</span></td>
                <td>AdminUser</td>
                <td>
                    <button class="btn btn-sm btn-primary" title="Return Book"><i class="fas fa-undo"></i></button>
                    <button class="btn btn-sm btn-danger" title="Delete Loan"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addBookModalLabel">Add Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="bookForm" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="bookTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="bookTitle" required>
          </div>
          <div class="mb-3">
            <label for="bookAuthor" class="form-label">Author</label>
            <input type="text" class="form-control" id="bookAuthor">
          </div>
          <div class="mb-3">
            <label for="bookYear" class="form-label">Publication Year</label>
            <input type="number" class="form-control" id="bookYear">
          </div>
          <div class="mb-3">
            <label for="bookCover" class="form-label">Cover Image</label>
            <input type="file" class="form-control" id="bookCover" accept="image/*">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="bookForm" class="btn btn-primary">Save Book</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addLoanModal" tabindex="-1" aria-labelledby="addLoanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addLoanModalLabel">Add Loan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="loanForm">
          <div class="mb-3">
            <label for="loanBook" class="form-label">Book</label>
            <select class="form-select" id="loanBook" required>
              <option selected disabled>Select a book</option>
              <option value="1">The Great Gatsby</option>
              <option value="2">1984</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="loanMember" class="form-label">Member Name</label>
            <input type="text" class="form-control" id="loanMember" required>
          </div>
          <div class="mb-3">
            <label for="loanEmail" class="form-label">Member Email</label>
            <input type="email" class="form-control" id="loanEmail" required>
          </div>
          <div class="mb-3">
            <label for="loanDate" class="form-label">Loan Date</label>
            <input type="date" class="form-control" id="loanDate" value="<?= date('Y-m-d') ?>">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="loanForm" class="btn btn-success">Save Loan</button>
      </div>
    </div>
  </div>
</div>
</x-layout>

