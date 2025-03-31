document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".filter-btn");
    const projects = document.querySelectorAll(".portfolio-item");

    buttons.forEach(button => {
        button.addEventListener("click", function() {
            const category = this.getAttribute("data-category");

            projects.forEach(project => {
                const projectCategory = project.getAttribute("data-category");

                if (category === "all" || projectCategory === category) {
                    project.style.display = "flex";
                } else {
                    project.style.display = "none";
                }
            });
        });
    });
});