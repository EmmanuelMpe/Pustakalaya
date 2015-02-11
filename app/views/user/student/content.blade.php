<div class="lend-table">
    <div class="panel panel-default">
        <div class="panel-heading">Books lent @if (count($books) > 0)
            <span class="badge">
            <b>{{ count($books) }}/7</b></span> @endif
        </div>

        @if (count($books)==0)
        <div class="panel-body text-center">
            None
        </div>
        @else
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Book</th>
                    <th>Author</th>
                    <th>Edition</th>
                    <th>Date Issued</th>
                    <th>Expiry Date</th>
                    <th>Fine</th>
                </tr>
            </thead>
            <tbody>
                <!-- tr class="info | success | danger | warning | active" -->
                @foreach ($books as $book)
                <tr>
                    <td>$book->id</td>
                    <td>$book->bookInfo->name</td>
                    <td>$book->bookInfo->author</td>
                    <td>$book->edition</td>
                    <td>$book->assigned_date</td>
                    <td>Calculate the shit.</td>
                    <td>Calculate this shit too.</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
