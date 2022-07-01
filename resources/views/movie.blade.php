@extends('layouts.front.app')
@section('content')
<div class="container">
    <h1 class="h1mwl">Movie Watch List</h1>
    <form id="movie-form">
        <div class="form-group">
            <label for="Movie Name">Movie Name :</label>
            <input type="text" id="moviename" class="form-control" />
        </div>
        <div class="form-group">
            <label for="Movie Rate">Rate <span style="margin-left: 55px">:</span></label>
            <input type="text" id="movierate" class="form-control" />
        </div>

        <input type="submit" value="Add Movie" class="btn-submit" />
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Movie Title</th>
                <th>Rate</th>
                <th>Action</th>
            </tr>
            <tr id="row">
                <td>Jin & Jun</td>
                <td>5.6</td>
                <td><a href="#" onclick="removeIt()" class="delete">Delete</a></td>
            </tr>
            <tr id="row">
                <td>Jan & Jin</td>
                <td>5</td>
                <td><a href="#" onclick="removeIt()" class="delete">Delete</a></td>
            </tr>
            <tr id="row">
                <td>Jin & Jon</td>
                <td>5</td>
                <td><a href="#" onclick="removeIt()" class="delete">Delete</a></td>
            </tr>
            <tr id="row">
                <td>Jun & Jun</td>
                <td>6</td>
                <td><a href="#" onclick="removeIt()" class="delete">Delete</a></td>
            </tr>
            <tr id="row">
                <td>Jan & Jun</td>
                <td>9</td>
                <td><a href="#" onclick="removeIt()" class="delete">Delete</a></td>
            </tr>
        </thead>
        <tbody id="movie-list"></tbody>
    </table>
</div>
<script>
// Movie Class: Represents a Movie

const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) => (v1 !== "" && v2 !== "" && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1
    .toString().localeCompare(v2)))(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll("th").forEach((th) =>
    th.addEventListener("click", () => {
        const table = th.closest("table");
        Array.from(table.querySelectorAll("tr:nth-child(n+2)"))
            .sort(comparer(Array.from(th.parentNode.children).indexOf(th), (this.asc = !this.asc)))
            .forEach((tr) => table.appendChild(tr));
    })
);

class Movie {
    constructor(moviename, rate) {
        this.moviename = moviename;
        this.rate = rate;
    }
}

// UI Class: Handle UI Tasks
class UI {
    static displayMovies() {
        const Movies = Store.getMovies();

        Movies.forEach((Movie) => UI.addMovieToList(Movie));
    }

    static addMovieToList(Movie) {
        const list = document.querySelector("#movie-list");

        const row = document.createElement("tr");

        row.innerHTML = `
        <td>${Movie.moviename}</td>
        <td>${Movie.rate}</td>
        <td><a href="#" class="delete">Delete</a></td>
      `;

        list.appendChild(row);
    }

    static deleteMovie(el) {
        if (el.classList.contains("delete")) {
            el.parentElement.parentElement.remove();
        }
    }

    static showAlert(message, className) {
        const div = document.createElement("div");
        div.className = `alert alert-${className}`;
        div.appendChild(document.createTextNode(message));
        const container = document.querySelector(".container");
        const form = document.querySelector("#movie-form");
        container.insertBefore(div, form);

        // Vanish in 3 seconds
        setTimeout(() => document.querySelector(".alert").remove(), 2000);
    }

    static clearFields() {
        document.querySelector("#moviename").value = "";
        document.querySelector("#movierate").value = "";
    }
}

// Store Class: Handles Storage
class Store {
    static getMovies() {
        let Movies;
        if (localStorage.getItem("Movies") === null) {
            Movies = [];
        } else {
            Movies = JSON.parse(localStorage.getItem("Movies"));
        }

        return Movies;
    }

    static addMovie(Movie) {
        const Movies = Store.getMovies();
        Movies.push(Movie);
        localStorage.setItem("Movies", JSON.stringify(Movies));
    }

    static removeMovie(rate) {
        const Movies = Store.getMovies();

        Movies.forEach((Movie, index) => {
            if (Movie.rate === rate) {
                Movies.splice(index, 1);
            }
        });

        localStorage.setItem("Movies", JSON.stringify(Movies));
    }
}

// Event: Display Movies
document.addEventListener("DOMContentLoaded", UI.displayMovies);

// Event: Add a Movie
document.querySelector("#movie-form").addEventListener("submit", (e) => {
    // Prevent actual submit
    e.preventDefault();

    // Get form values
    const moviename = document.querySelector("#moviename").value;
    const movierate = document.querySelector("#movierate").value;

    // Validate
    if (moviename === "" || movierate === "") {
        UI.showAlert("Please fill in all fields", "danger");
    } else {
        // Instatiate Movie
        const movie = new Movie(moviename, movierate);

        // Add Movie to UI
        UI.addMovieToList(movie);

        // Add Movie to store
        Store.addMovie(movie);

        // Show success message
        UI.showAlert("Movie Added", "success");

        // Clear fields
        UI.clearFields();
    }
});

// Event: Remove a Movie
document.querySelector("#movie-list").addEventListener("click", (e) => {
    // Remove Movie from UI
    UI.deleteMovie(e.target);

    // Remove Movie from store
    Store.removeMovie(e.target.parentElement.previousElementSibling.textContent);

    // Show success message
    UI.showAlert("Movie Removed", "success");
});
</script>
@endsection