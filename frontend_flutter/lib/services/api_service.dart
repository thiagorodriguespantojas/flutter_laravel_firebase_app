import 'package:firebase_auth/firebase_auth.dart';
import 'package:http/http.dart' as http;

class ApiService {
  final String baseUrl = 'http://localhost:8000/api'; // atualize conforme necessário

  Future<http.Response> fetchAgendamentos() async {
    final user = FirebaseAuth.instance.currentUser;
    if (user != null) {
      final idToken = await user.getIdToken();
      final response = await http.get(
        Uri.parse('$baseUrl/agendamentos'),
        headers: {
          'Authorization': 'Bearer $idToken',
          'Content-Type': 'application/json',
        },
      );
      return response;
    } else {
      throw Exception("Usuário não autenticado");
    }
  }

  Future<http.Response> criarAgendamento(Map<String, dynamic> data) async {
    final user = FirebaseAuth.instance.currentUser;
    if (user != null) {
      final idToken = await user.getIdToken();
      final response = await http.post(
        Uri.parse('$baseUrl/agendamentos'),
        headers: {
          'Authorization': 'Bearer $idToken',
          'Content-Type': 'application/json',
        },
        body: data,
      );
      return response;
    } else {
      throw Exception("Usuário não autenticado");
    }
  }
}
