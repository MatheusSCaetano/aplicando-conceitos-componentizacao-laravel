<x-layout>
  <style>
    .content {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .form-container {
      background: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 300px;
    }

    h2 {
      text-align: center;
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    textarea {
      width: 100%;
      height: 100px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: none;
      font-size: 14px;
    }

    textarea:focus {
      border-color: #007bff;
      outline: none;
    }

    button {
      margin-top: 10px;
      width: 100%;
      padding: 8px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
  <div class="form-container">
    <h2>Formulario</h2>
    <form method="POST" action="/ideas">
    @csrf
    <label for="mensagem">Mensagem:</label>
      <textarea id="idea" name="idea" placeholder="Digite sua mensagem aqui..."></textarea>
      <button type="submit">Enviar</button>
    </form>
  </div>

  <div>
    <h2>Your ideas</h2>
    <ul>

      @foreach($ideas as $idea)
        <li>{{$idea}}</li>
      @endforeach
    
    </ul>

  </div>
</x-layout>

