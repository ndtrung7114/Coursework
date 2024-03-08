document.addEventListener('DOMContentLoaded', function() {
    // Function to fetch and display questions
    function displayQuestions() {
        // Fetch questions from the backend
        fetch('/api/questions')
            .then(response => response.json())
            .then(questions => {
                const questionList = document.getElementById('question-list');
                questions.forEach(question => {
                    // Create a div for each question
                    const questionDiv = document.createElement('div');
                    questionDiv.classList.add('question');

                    // Display question details
                    questionDiv.innerHTML = `
                        <h2>${question.title}</h2>
                        <p>${question.content}</p>
                        <p>Author: ${question.author}</p>
                        <p>Module: ${question.module}</p>
                    `;

                    // Display comments or reactions
                    if (question.comments.length > 0) {
                        const commentsList = document.createElement('ul');
                        commentsList.innerHTML = '<strong>Comments:</strong>';
                        question.comments.forEach(comment => {
                            commentsList.innerHTML += `<li>${comment}</li>`;
                        });
                        questionDiv.appendChild(commentsList);
                    }

                    // Display form to add a comment or reaction
                    const commentForm = document.createElement('form');
                    commentForm.innerHTML = `
                        <input type="text" placeholder="Your comment">
                        <button type="submit">Submit</button>
                    `;
                    commentForm.addEventListener('submit', function(event) {
                        event.preventDefault();
                        const commentInput = commentForm.querySelector('input');
                        const comment = commentInput.value;
                        // Submit comment to the backend
                        // This part is left for you to implement using AJAX or Fetch API
                        // After successfully submitting the comment, update the UI accordingly
                        const commentItem = document.createElement('li');
                        commentItem.textContent = comment;
                        commentsList.appendChild(commentItem);
                        commentInput.value = ''; // Clear input field after submission
                    });
                    questionDiv.appendChild(commentForm);

                    // Append question div to question list
                    questionList.appendChild(questionDiv);
                });
            })
            .catch(error => {
                console.error('Error fetching questions:', error);
            });
    }

    // Initially display questions when the page loads
    displayQuestions();
});
