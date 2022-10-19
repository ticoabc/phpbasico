<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div>
        <label for="color">Background Color:</label>
        <select name="color" id="color">
            <option value="">--- Choose a color ---</option>
            <option value="red">Red</option>
            <option value="green" selected>Green</option>
            <option value="blue">Blue</option>
        </select>
    </div>
    <div>
        <button type="submit">Select</button>
    </div>
</form>