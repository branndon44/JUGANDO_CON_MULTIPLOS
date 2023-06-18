extends Control

# Called when the node enters the scene tree for the first time.
func _ready():
	pass # Replace with function body.

# Called every frame. 'delta' is the elapsed time since the previous frame.
func _process(_delta):
	pass

func _on_iniciar_sesión_pressed():
	get_tree().change_scene_to("res://Inicio.tscn")

func _on_salir_pressed():
	get_tree().quit()
