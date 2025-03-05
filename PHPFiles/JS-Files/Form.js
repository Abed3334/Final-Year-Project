document.addEventListener("DOMContentLoaded", function() {
    const continueButton = document.querySelector("#butdiv .buttons");
    const step1 = document.getElementById("step1");
    const step2 = document.getElementById("step2");
    const step1Indicator = document.getElementById("step1-indicator");
    const step2Indicator = document.getElementById("step2-indicator");

    step2.classList.add("hidden");

    continueButton.addEventListener("click", function(event) {
        event.preventDefault(); // Prevents form submission
        
        // Validate all required fields
        let isValid = true;
        const requiredFields = step1.querySelectorAll("input[required], select[required]");
        
        requiredFields.forEach(field => {
            if (!field.value) {
                isValid = false;
                field.classList.add("is-invalid");
            } else {
                field.classList.remove("is-invalid");
                field.classList.add("is-valid");
            }
        });

        
        if (isValid) {
            step1.classList.add("hidden");
            step2.classList.remove("hidden");

           
            step1Indicator.classList.remove("active");
            step2Indicator.classList.add("active");
        } else {
            alert("Please fill out all required fields before continuing.");
        }
    });

});

function prevStep() {
            document.getElementById("step2").classList.add("hidden");
            document.getElementById("step1").classList.remove("hidden");
            document.getElementById("step2-indicator").classList.remove("active");
            document.getElementById("step1-indicator").classList.add("active");
        }
        const skillInput = document.getElementById('skillInput');
        const skillsList = document.getElementById('skillsList');

        skillInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' && skillInput.value.trim() !== '') {
                event.preventDefault();
                addSkill(skillInput.value.trim());
                skillInput.value = '';
            }
        });

        function addSkill(skillName) {
            const skillWrapper = document.createElement('div');
            skillWrapper.classList.add('skill');

            const skillLabel = document.createElement('span');
            skillLabel.textContent = skillName;

            const removeButton = document.createElement('span');
            removeButton.textContent = '×';
            removeButton.classList.add('remove');
            removeButton.addEventListener('click', function() {
                skillWrapper.remove();
            });

            const levelLabel = document.createElement('div');
            levelLabel.classList.add('level-label');
            levelLabel.textContent = 'Intermediate';

            const slider = document.createElement('input');
            slider.type = 'range';
            slider.min = '1';
            slider.max = '3';
            slider.value = '2';
            slider.classList.add('slider');
            slider.addEventListener('input', function() {
                levelLabel.textContent = getLevelText(slider.value);
            });

            const sliderContainer = document.createElement('div');
            sliderContainer.classList.add('slider-container');

           

            skillWrapper.appendChild(skillLabel);
            skillWrapper.appendChild(removeButton);
            skillWrapper.appendChild(levelLabel);
            skillWrapper.appendChild(slider);
            skillWrapper.appendChild(sliderContainer);
            skillsList.appendChild(skillWrapper);
        }

        function getLevelText(value) {
            switch(value) {
                case '1': return 'Beginner';
                case '2': return 'Intermediate';
                case '3': return 'Advanced';
                default: return 'Intermediate';
            }
        }

        const certificateInput = document.getElementById('certificateInput');
    const fileNameDisplay = document.querySelector('.file-name');

    certificateInput.addEventListener('change', function() {
        const fileName = this.files[0]?.name;
        if (fileName) {
            fileNameDisplay.textContent = `Selected: ${fileName}`;
        } else {
            fileNameDisplay.textContent = '';
        }
    });

    function addUniversity() {
    var eduSection = document.getElementById('education-section');
    var newDiv = document.createElement('div');
    newDiv.classList.add('education-block');
    newDiv.innerHTML = `
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="University">University</label>
                <select class="form-control" id="University" required>
                    <option value="">Select</option>
                    <option value="Harvard">Harvard University</option>
                    <option value="Stanford">Stanford University</option>
                    <option value="MIT">MIT</option>
                    <option value="Oxford">Oxford University</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="Major">Major</label>
                <select class="form-control" id="Major" required>
                    <option value="">Select</option>
                    <option value="CS">Computer Science</option>
                    <option value="EE">Electrical Engineering</option>
                    <option value="ME">Mechanical Engineering</option>
                    <option value="BA">Business Administration</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="startdate">Start Date</label>
                <input type="date" class="form-control" id="startdate" required>
            </div>
            <div class="form-group col-md-6">
                <label for="enddate">End Date</label>
                <input type="date" class="form-control" id="enddate">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="graduationstatus">Graduation Status</label>
                <select class="form-control" id="graduationstatus" required>
                    <option value="">Select</option>
                    <option value="Graduated">Graduated</option>
                    <option value="Enrolled">Currently Enrolled</option>
                    <option value="Dropout">Dropout</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="topictitle">Topic Title</label>
                <input type="text" class="form-control" id="topictitle" placeholder="Text">
            </div>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" placeholder="Describe your experience..."></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-danger" onclick="removeUniversity(this)">Remove</button>
        </div>
    `;
    eduSection.insertBefore(newDiv, eduSection.lastChild);
}

function removeUniversity(button) {
    var eduBlock = button.closest('.education-block');
    eduBlock.remove();
}

function addEmployment() {
    var empSection = document.getElementById('employment-section');
    var newDiv = document.createElement('div');
    newDiv.classList.add('employment-block');
    newDiv.innerHTML = `
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="companyname">Company Name</label>
                <input type="text" class="form-control" id="companyname" placeholder="Company Name">
            </div>
            <div class="form-group col-md-6">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Position">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="typeofemployment">Type of Employment</label>
                <input type="text" class="form-control" id="typeofemployment" placeholder="Type of Employment">
            </div>
            <div class="form-group col-md-6">
                <label for="startdatesteptwo">Start Date</label>
                <input type="date" class="form-control" id="startdatesteptwo" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="enddatesteptwo">End Date</label>
                <input type="date" class="form-control" id="enddatesteptwo">
            </div>
            <div class="form-group col-md-6">
                <label for="Location">Location</label>
                <div style="display:flex;gap:15px">
                    <select class="form-control" id="country" required>
                        <option value="">Country</option>
                        <option value="US">United States</option>
                        <option value="UK">United Kingdom</option>
                        <option value="IN">India</option>
                        <option value="AU">Australia</option>
                    </select>
                    <select class="form-control" id="city" required>
                        <option value="">City</option>
                        <option value="NY">New York</option>
                        <option value="LDN">London</option>
                        <option value="DEL">Delhi</option>
                        <option value="SYD">Sydney</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" placeholder="Describe your experience..."></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-danger" onclick="removeEmployment(this)">Remove</button>
        </div>
    `;
    empSection.insertBefore(newDiv, empSection.lastChild);
}

function removeEmployment(button) {
    var empBlock = button.closest('.employment-block');
    empBlock.remove();
}