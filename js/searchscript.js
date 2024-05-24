$(document).ready(function(){
    $('#searchButton').click(function(){
        var query = $('#searchInput').val();
        fetchSearchResults(query);
    });
});


function fetchSearchResults(query) {
    var url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyDGI-o1KZnkWqhJT5vgquy0bn_UOxTdgew&cx=b33f2d267f12d49b6&q=' + query; 
    $.ajax({
        url: url,
        dataType: 'json',
        success: function(data){
            displaySearchResults(data.items);
        },
        error: function(error){
            console.log(error);
        }
    });
}

function displaySearchResults(results){
    var searchResultsDiv = $('#searchResults');
    searchResultsDiv.empty();

    if(results.length === 0){
        searchResultsDiv.append('<p>No results found.</p>');
        return;
    }

    results.forEach(function(result){
        var title = result.title;
        var link = result.link;

        searchResultsDiv.append('<h5>'+ title +'</h5>');
        searchResultsDiv.append('<a href="'+ link + '">' + link + '</a>');
        searchResultsDiv.append('<hr>');
    });
}