<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard - OverFlow</title>
  <link rel="stylesheet" href="ofstyles.css" />
</head>
<body>

<header class="dashboard-header">
  <div class="header-left">
    <button class="menu-button" onclick="toggleMenu()" aria-label="Open menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <img src="Asset 4.svg" alt="OverFlow Logo" class="dashboard-logo">
  </div>
  <div class="header-right">
    <div class="reminder-container">
      <button class="reminder-bell" onclick="toggleReminderPopup()" aria-label="Toggle reminders">
        🔔
        <span id="reminderCount" class="reminder-count" style="display:none;">0</span>
      </button>
      <div class="reminder-popup" id="reminderPopup">
        <h3>Reminders</h3>
        <ul id="reminderList"></ul>
        <input type="text" id="reminderInput" placeholder="Add reminder..." />
        <button onclick="addReminder()">Add</button>
      </div>
    </div>
    <span class="user-avatar"></span>
    <span class="username">Username</span>
  </div>
</header>

<!-- Task History Side Panel -->
<div class="task-history-panel" id="taskHistoryPanel">
  <h2>Task History</h2>
  <ul id="historyList">
    <!-- Filled dynamically -->
  </ul>
</div>

<!-- Main Dashboard -->
<div class="dashboard">
  <h1>Task Dashboard</h1>

  <div class="week-columns">
    <div class="week-col">
      <div class="week-col-header">
        <button class="add-day-btn" aria-label="Add to Sunday" onclick="toggleTaskInput(this)">+</button>
        <h2>Sunday</h2>
        <span class="task-count-badge">0</span>
      </div>
      <div class="task-input-popup">
        <select class="task-category">
          <option value="" disabled selected>Select category</option>
          <option value="Work">Work</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
        </select>
        <input type="text" class="task-desc" placeholder="Enter task..." />
        <button class="submit-task-btn" onclick="addTask(event, this)">Add</button>
      </div>
      <div class="tasks-list"></div>
    </div>
    <div class="week-col">
      <div class="week-col-header">
        <button class="add-day-btn" aria-label="Add to Monday" onclick="toggleTaskInput(this)">+</button>
        <h2>Monday</h2>
        <span class="task-count-badge">0</span>
      </div>
      <div class="task-input-popup">
        <select class="task-category">
          <option value="" disabled selected>Select category</option>
          <option value="Work">Work</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
        </select>
        <input type="text" class="task-desc" placeholder="Enter task..." />
        <button class="submit-task-btn" onclick="addTask(event, this)">Add</button>
      </div>
      <div class="tasks-list"></div>
    </div>
    <div class="week-col">
      <div class="week-col-header">
        <button class="add-day-btn" aria-label="Add to Tuesday" onclick="toggleTaskInput(this)">+</button>
        <h2>Tuesday</h2>
        <span class="task-count-badge">0</span>
      </div>
      <div class="task-input-popup">
        <select class="task-category">
          <option value="" disabled selected>Select category</option>
          <option value="Work">Work</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
        </select>
        <input type="text" class="task-desc" placeholder="Enter task..." />
        <button class="submit-task-btn" onclick="addTask(event, this)">Add</button>
      </div>
      <div class="tasks-list"></div>
    </div>
    <div class="week-col">
      <div class="week-col-header">
        <button class="add-day-btn" aria-label="Add to Wednesday" onclick="toggleTaskInput(this)">+</button>
        <h2>Wednesday</h2>
        <span class="task-count-badge">0</span>
      </div>
      <div class="task-input-popup">
        <select class="task-category">
          <option value="" disabled selected>Select category</option>
          <option value="Work">Work</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
        </select>
        <input type="text" class="task-desc" placeholder="Enter task..." />
        <button class="submit-task-btn" onclick="addTask(event, this)">Add</button>
      </div>
      <div class="tasks-list"></div>
    </div>
    <div class="week-col">
      <div class="week-col-header">
        <button class="add-day-btn" aria-label="Add to Thursday" onclick="toggleTaskInput(this)">+</button>
        <h2>Thursday</h2>
        <span class="task-count-badge">0</span>
      </div>
      <div class="task-input-popup">
        <select class="task-category">
          <option value="" disabled selected>Select category</option>
          <option value="Work">Work</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
        </select>
        <input type="text" class="task-desc" placeholder="Enter task..." />
        <button class="submit-task-btn" onclick="addTask(event, this)">Add</button>
      </div>
      <div class="tasks-list"></div>
    </div>
    <div class="week-col">
      <div class="week-col-header">
        <button class="add-day-btn" aria-label="Add to Friday" onclick="toggleTaskInput(this)">+</button>
        <h2>Friday</h2>
        <span class="task-count-badge">0</span>
      </div>
      <div class="task-input-popup">
        <select class="task-category">
          <option value="" disabled selected>Select category</option>
          <option value="Work">Work</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
        </select>
        <input type="text" class="task-desc" placeholder="Enter task..." />
        <button class="submit-task-btn" onclick="addTask(event, this)">Add</button>
      </div>
      <div class="tasks-list"></div>
    </div>
    <div class="week-col">
      <div class="week-col-header">
        <button class="add-day-btn" aria-label="Add to Saturday" onclick="toggleTaskInput(this)">+</button>
        <h2>Saturday</h2>
        <span class="task-count-badge">0</span>
      </div>
      <div class="task-input-popup">
        <select class="task-category">
          <option value="" disabled selected>Select category</option>
          <option value="Work">Work</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
        </select>
        <input type="text" class="task-desc" placeholder="Enter task..." />
        <button class="submit-task-btn" onclick="addTask(event, this)">Add</button>
      </div>
      <div class="tasks-list"></div>
    </div>
  </div>
</div>

<script>
  // Store tasks with timestamps: { text, createdAt, deletedAt (optional) }
  const taskHistory = [];


  function sendTaskToBackend(title, category, day) {
  const formData = new FormData();
  formData.append("title", title);
  formData.append("description", `${category} task for ${day}`);
  formData.append("due_date", "2025-12-31"); // you can dynamically set this later
  formData.append("pinned", 0);
  formData.append("completed", 0);
  formData.append("user_id", 1);       // Replace with actual logged-in user ID
  formData.append("category_id", 1);   // Replace with correct category ID

  fetch("http://localhost/overflow/create_task.php", {
    method: "POST",
    body: formData
  })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        console.log("Task saved to database.");
      } else {
        console.error("Failed to save task:", data.message);
      }
    })
    .catch(error => {
      console.error("Error connecting to backend:", error);
    });
}


  function updateTaskHistory() {
    const historyList = document.getElementById('historyList');
    historyList.innerHTML = '';
    if (taskHistory.length === 0) {
      historyList.innerHTML = '<li>No task history</li>';
      return;
    }
    taskHistory.slice().reverse().forEach(entry => {
      const li = document.createElement('li');
      li.innerHTML = `<span>${entry.action} <b>${entry.text}</b> on <i>${entry.day}</i> <small style="color:#888;">(${entry.time})</small></span>`;
      historyList.appendChild(li);
    });
  }

  const taskHistoryPanel = document.getElementById('taskHistoryPanel');
  const menuButton = document.querySelector('.menu-button');

  function toggleMenu() {
    taskHistoryPanel.classList.toggle('open');
  }

  // Close menu if clicked outside
  document.addEventListener('click', function (event) {
    const isClickInsideMenu = taskHistoryPanel.contains(event.target);
    const isClickOnButton = menuButton.contains(event.target);

    if (!isClickInsideMenu && !isClickOnButton) {
      taskHistoryPanel.classList.remove('open');
    }
  });

  // Helper: format Date to readable string
  function formatTimestamp(date) {
    return date.toLocaleString(); // You can customize format if you want
  }

  // Reminder feature data
  const reminders = [];

  const reminderPopup = document.getElementById('reminderPopup');
  const reminderCount = document.getElementById('reminderCount');

  function toggleReminderPopup() {
    reminderPopup.classList.toggle('open');
  }

  // Add a reminder
  function addReminder() {
    const input = document.getElementById('reminderInput');
    const text = input.value.trim();
    if (!text) return;

    const reminder = {
      text,
      createdAt: new Date()
    };
    reminders.push(reminder);
    input.value = '';

    updateReminders();
  }

  // Remove reminder by index
  function removeReminder(index) {
    reminders.splice(index, 1);
    updateReminders();
  }

  // Update reminder popup UI and counter
  function updateReminders() {
    const reminderList = document.getElementById('reminderList');
    reminderList.innerHTML = '';

    if (reminders.length === 0) {
      reminderList.innerHTML = '<li>No reminders</li>';
      reminderCount.style.display = 'none';
    } else {
      reminders.forEach((reminder, i) => {
        const li = document.createElement('li');
        li.innerHTML = `
          <span>${reminder.text}</span>
          <button onclick="removeReminder(${i})" aria-label="Remove reminder">&times;</button>
        `;
        reminderList.appendChild(li);
      });
      reminderCount.textContent = reminders.length;
      reminderCount.style.display = 'inline-block';
    }
  }

  // Close reminder popup if clicked outside
  document.addEventListener('click', function (event) {
    if (!reminderPopup.contains(event.target) && !event.target.closest('.reminder-bell')) {
      reminderPopup.classList.remove('open');
    }
  });

  // Toggle the task input popup for the correct day
  function toggleTaskInput(btn) {
    const popup = btn.parentElement.nextElementSibling;
    // Hide all other popups
    document.querySelectorAll('.task-input-popup').forEach(el => {
      if (el !== popup) el.style.display = 'none';
    });
    // Toggle this popup
    popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
  }

  // Example for your addTask function
  function addTask(event, btn) {
    event.preventDefault();
    const popup = btn.parentElement;
    const weekCol = popup.parentElement;
    const category = popup.querySelector('.task-category').value;
    const desc = popup.querySelector('.task-desc').value.trim();
    if (!category || !desc) return;
    sendTaskToBackend(desc, category, day);


    // Get day name
    const day = weekCol.querySelector('h2').textContent;

    // Create task element with icon buttons
    const taskDiv = document.createElement('div');
    taskDiv.className = 'task-item category-' + category.toLowerCase(); // Add category class
    taskDiv.innerHTML = `
      <span class="category">${category}</span>
      <div class="task-main-row">
        <input type="checkbox" class="complete-task-checkbox" title="Mark as complete">
        <span class="task-desc-text">${desc}</span>
      </div>
      <div class="task-actions">
        <button class="edit-btn" title="Edit">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M14.85 2.85a1.2 1.2 0 0 1 1.7 1.7l-9.2 9.2-2.1.4.4-2.1 9.2-9.2Zm2.12-2.12a3.2 3.2 0 0 0-4.53 0l-9.2 9.2a1 1 0 0 0-.26.48l-.8 4.2a1 1 0 0 0 1.18 1.18l4.2-.8a1 1 0 0 0 .48-.26l9.2-9.2a3.2 3.2 0 0 0 0-4.53Z" fill="#2196f3"/></svg>
        </button>
        <button class="remove-btn" title="Remove">
          <svg width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M7 8v6m3-6v6m3-6v6M2 5h16M6 5V3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2m2 0v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5h12Z" stroke="#d00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
    `;

    const checkbox = taskDiv.querySelector('.complete-task-checkbox');
    checkbox.addEventListener('change', function() {
      taskDiv.classList.toggle('completed', checkbox.checked);
    });

    // Add to tasks-list
    weekCol.querySelector('.tasks-list').appendChild(taskDiv);
    updateTaskCounts(); // <-- add this

    // Add to history
    taskHistory.push({
      action: 'Added',
      text: desc,
      day: day,
      time: new Date().toLocaleString()
    });
    updateTaskHistory();

    // Add remove logic
    taskDiv.querySelector('.remove-btn').onclick = function() {
      // Add to history before removing
      taskHistory.push({
        action: 'Removed',
        text: desc,
        day: day,
        time: new Date().toLocaleString()
      });
      updateTaskHistory();
      taskDiv.remove();
      updateTaskCounts(); // <-- add this
    };

    // Add edit logic
    taskDiv.querySelector('.edit-btn').onclick = function() {
      const descSpan = taskDiv.querySelector('.task-desc-text');
      const oldText = descSpan.textContent;
      // Replace text with input
      const input = document.createElement('input');
      input.type = 'text';
      input.value = oldText;
      input.className = 'edit-task-input';
      descSpan.replaceWith(input);
      input.focus();

      // Save on Enter or blur
      function saveEdit() {
        const newText = input.value.trim() || oldText;
        const newSpan = document.createElement('span');
        newSpan.className = 'task-desc-text';
        newSpan.textContent = newText;
        input.replaceWith(newSpan);
        // Optionally, log edit to history
        if (newText !== oldText) {
          taskHistory.push({
            action: 'Edited',
            text: newText,
            day: day,
            time: new Date().toLocaleString()
          });
          updateTaskHistory();
        }
      }
      input.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
          saveEdit();
        }
      });
      input.addEventListener('blur', saveEdit);
    };

    // Reset and hide popup
    popup.querySelector('.task-category').selectedIndex = 0;
    popup.querySelector('.task-desc').value = '';
    popup.style.display = 'none';

    updateTaskCounts(); // Update task counts
  }

  // Update task counts for each day column
  function updateTaskCounts() {
    document.querySelectorAll('.week-col').forEach(col => {
      const count = col.querySelectorAll('.task-item').length;
      const badge = col.querySelector('.task-count-badge');
      if (badge) badge.textContent = count;
    });
  }

  // Hide popup if clicked outside
  document.addEventListener('mousedown', function (e) {
    document.querySelectorAll('.task-input-popup').forEach(popup => {
      const addBtn = popup.previousElementSibling.querySelector('.add-day-btn');
      if (!popup.contains(e.target) && !addBtn.contains(e.target)) {
        popup.style.display = 'none';
      }
    });
  });
</script>

</body>
</html>
