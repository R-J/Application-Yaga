/* Copyright 2013 Zachary Doll */
jQuery(document).ready(function($) {
  $('#Actions').sortable({
    axis: 'y',
    containment: 'parent',
    cursor: 'move',
    cursorAt: {left: '10px'},
    forcePlaceholderSize: true,
    items: 'li',
    placeholder: 'Placeholder',
    opacity: .6,
    tolerance: 'pointer',
    update: function() {
      $.post(
        gdn.url('action/sort.json'),
        {
          'SortArray': $('ol.Sortable').sortable('toArray'),
          'TransientKey': gdn.definition('TransientKey')
        },
        function(response) {
          if (!response || !response.Result) {
            alert("Oops - Didn't save order properly");
          }
        }
      );
    }
  });

  // Change selected icon when css class is manually entered
  document.addEventListener('keyup', function(e) {
    if (e.target.id != 'CssClass') {
      return;
    }
    // Remove .Selected from previous icon
    var selectedIcon = document.querySelector('#ActionIcons img.Selected');
    if (selectedIcon) {
      selectedIcon.classList.remove('Selected');
    }
    // Add .Selected to the corresponding element
    var actionIcon = document.querySelector('#ActionIcons img[data-class="' + e.target.value + '"]');
    if (actionIcon) {
      actionIcon.classList.add('Selected');
    }
  }, false);

  // Change text in css class when icon is clicked
  document.addEventListener('click', function(e) {
    if (e.target.parentNode.id != 'ActionIcons') {
      return;
    }
    if (e.target.tagName.toLowerCase() != 'img') {
      return;
    }
    var newCssClass = 'React' + e.target.getAttribute('title');
    // Show new css class in input box
    document.getElementById('CssClass').value = newCssClass;
    // Remove .Selected from previous icon
    var selectedIcon = document.querySelector('#ActionIcons img.Selected');
    if (selectedIcon) {
      selectedIcon.classList.remove('Selected');
    }
    // Add .Selected to the clicked element
    e.target.classList.add('Selected');
  }, false);

  // Wait to hide things after a popup reveal has happened
  $('body').on('popupReveal', function() {

    // Hide the advanced settings
    $('#AdvancedActionSettings').children('div').hide();
    $('#AdvancedActionSettings span').click(function(){
      $(this).siblings().slideToggle();
    });

    var DeleteForm = $("form[action*='action/delete']");
    var OtherAction = DeleteForm.find('select');
    OtherAction.hide();
    
    // Toggle the display of the dropdown with the checkbox
    DeleteForm.find('input[type=checkbox]').click(function() {
      if($(this).is(':checked')) {
        OtherAction.slideDown(500);
      }
      else {
        OtherAction.slideUp(300);
      }
    });
  });

  // If the form is already existing, trigger the event manually
  if($('#AdvancedActionSettings').length) {
    $('body').trigger('popupReveal');
  }
});
