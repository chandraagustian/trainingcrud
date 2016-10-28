 

  <div class="col-md-12">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th>No</th>
            <th>title</th>
            <th>content</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
        <tr>
        <td>{{ $article->id }}</td>
        <td>{{ $article->title }}</td>
        <td>{{ $article->content }} 

       {!! str_limit($article->content, 250) !!}

       {!! link_to(route('articles.show', $article->id), 'Read More') !!}


        </td>

       

        </tr>
        @endforeach
        </tbody>
        <tfoot></tfoot>
        </table>
       
</div>  