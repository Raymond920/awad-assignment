<!DOCTYPE html>
<html>
<head>
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: 300px 1fr;
      gap: 20px;
      min-height: 200vh; /* Force scrolling for demo */
    }

    .grid-column {
      background: #f0f0f0;
      padding: 20px;
    }

    .sticky-flex {
      display: flex;
      flex-direction: column;
      gap: 10px;
      position: sticky;
      top: 175px; /* Stick 20px from the top */
      padding: 15px;
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
    }
  </style>
</head>
<body>
    <header style="position: sticky; top: 0; background: #fff; padding: 20px; border-bottom: 1px solid #ddd;">
        <h1>Sticky Flexbox Example</h1>
        <p>This example demonstrates a sticky flexbox layout.</p>
    </header>
  <div class="grid-container">
    <div class="grid-column">
      <div class="sticky-flex">
        <x-side-navbar />
      </div>
    </div>
    <div class="grid-column">
      <!-- Long content to force scrolling -->
      <div style="height: 2000px">Main content area</div>
    </div>
  </div>
</body>
</html>