<div class="accordion accordion-flush" id="accordionChild1">


    <div class="accordion-item">
        <h2 class="accordion-header" id="child-heading1">
        <button class="accordion-button collapsed child-accord" type="button" data-bs-toggle="collapse" data-bs-target="#child-collapse1" aria-expanded="false" aria-controls="child-collapse1">
        1st Semester
        </button>
        </h2>
        <div id="child-collapse1" class="accordion-collapse collapse" aria-labelledby="child-heading1" data-bs-parent="#accordionChild1">
            <div class="accordion-body accord-child-body" style="padding: 0;">
                @include('academic.courses.dvm-grandchilds.dvm-grandchild1')
            </div>
        </div>
    </div>


    <div class="accordion-item">
        <h2 class="accordion-header" id="child-heading2">
        <button class="accordion-button collapsed child-accord" type="button" data-bs-toggle="collapse" data-bs-target="#child-collapse2" aria-expanded="false" aria-controls="child-collapse2">
        2nd Semester
        </button>
        </h2>
        <div id="child-collapse2" class="accordion-collapse collapse" aria-labelledby="child-heading2" data-bs-parent="#accordionChild1">
            <div class="accordion-body accord-child-body" style="padding: 0;">
            @include('academic.courses.dvm-grandchilds.dvm-grandchild2')
            </div>
        </div>
    </div>



    <div class="accordion-item">
        <h2 class="accordion-header" id="child-heading3">
        <button class="accordion-button collapsed child-accord" type="button" data-bs-toggle="collapse" data-bs-target="#child-collapse3" aria-expanded="false" aria-controls="child-collapse3">
        MIdterm
        </button>
        </h2>
        <div id="child-collapse3" class="accordion-collapse collapse" aria-labelledby="child-heading3" data-bs-parent="#accordionChild1">
            <div class="accordion-body accord-child-body" style="padding: 0;">
            @include('academic.courses.dvm-grandchilds.dvm-grandchild3')
            </div>
        </div>
    </div>


</div>
